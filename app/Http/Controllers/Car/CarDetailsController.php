<?php

namespace App\Http\Controllers\Car;


use App\car\CarCategories;
use App\car\CarDetails;
use App\Http\Controllers\Controller;

use App\car\Rent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = CarDetails::with('category')->latest()->Paginate(10);
        return view('car.admin.car.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $car_category = CarCategories::all();
        return view('car.admin.car.create', compact('car_category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore1 = $filename.'_'.time().".".$extension;
            $path = $request->file('image')->storeAs('public/images/carDetails', $fileNameToStore1);
        } else {
            $fileNameToStore1 = 'no-image.jpg';
        }
        $car = new CarDetails();
        $car->model = $request->input('model');
        $car->image = $fileNameToStore1;
        $car->description = $request->input('description');
        $car->seats = $request->input('seats');
        $car->category_id = $request->input('category_id');
        $car->save();
        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CarDetails  $carDetails
     * @return \Illuminate\Http\Response
     */
    public function show(CarDetails $carDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CarDetails  $carDetails
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car_category = CarCategories::all();

        $cars = CarDetails::find($id);

        return view('car.admin.car.edit', compact('cars','car_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CarDetails  $carDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car = CarDetails::find($id);
        if($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore1 = $filename.'_'.time().".".$extension;
            $path = $request->file('image')->storeAs('public/images/carDetails', $fileNameToStore1);
        } else {
            $fileNameToStore1 = 'no-image.jpg';
        }

        $car->model = $request->input('model');
        $car->description = $request->input('description');
        $car->image = $fileNameToStore1;
        $car->seats = $request->input('seats');
        $car->category_id = $request->input('category_id');
        $car->save();
        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CarDetails  $carDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car= CarDetails::find($id)->delete();
        return redirect('/cars');
    }

    public function rent($id){
        if (Auth::check()) {
            $car = CarDetails::find($id)->value('id');

            $rent = new Rent();
            $rent->user_id = Auth::id();
            $rent->car_id = $car;
            $rent->save();

            return redirect()->back();
        }else {
            return response()->json(array("error" => "Unauthorized error"), 401);
        }

    }
}
