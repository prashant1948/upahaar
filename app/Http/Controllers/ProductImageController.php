<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = ProductImage::with('products')->get();
        return view('admin.product_images.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = DB::table('products')->get();
        return view('admin.product_images.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image.*' => 'nullable| image| max:2000',
            'p_id' => 'required',

        ]);

        if ($files = $request->file('image')) {
            // Define upload path
            // $destinationPath = public_path('/image_gallery/'); // upload path
            foreach($files as $img) {
                // Upload Orginal Image
                $profileImage =$img->getClientOriginalName();
                $profileImg = time().".".$profileImage;
                $img->storeAs('/public/Images/product_gallery', $profileImg);

                // Save In Database
                $data= new ProductImage();
                $data->image = "$profileImg";
                $data->p_id=$request->p_id;
                $data->save();
            }

        }
        return redirect()->back()->with('success', 'Image Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductImage  $productImage
     * @return \Illuminate\Http\Response
     */
    public function show(ProductImage $productImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductImage  $productImage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = DB::table('products')->get();
        $productImg = ProductImage::find($id);
        return view('admin.product_images.edit', compact('productImg','products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductImage  $productImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [

             'image.*' => 'nullable| image| max:2000',
             'p_id' => 'required',
        ]);

        if ($files = $request->file('image')) {
            // Define upload path
            // $destinationPath = public_path('/image_gallery/'); // upload path
            foreach($files as $img) {
                // Upload Orginal Image
                $profileImage =$img->getClientOriginalName();
                $profileImg = time().".".$profileImage;
                $img->storeAs('/public/Images/product_gallery', $profileImg);

                // Save In Database
                $data = ProductImage::find($id);
                $data->image = "$profileImg";
                $data->p_id = $request->p_id;

                $data->save();
            }

        }

        return redirect()->back()->with('success', 'Image Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductImage  $productImage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ProductImage::find($id);
        Storage::delete('public/Images/product_gallery/'.$data->image);
        $data->delete();
        return redirect()->back()->with('success', 'Image deleted');
    }
}
