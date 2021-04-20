<?php

namespace App\Http\Controllers\Car;


use App\car\CarCategories;
use App\car\CarDetails;
use App\Http\Controllers\Controller;

use App\car\Rent;
use App\Job\Job;
use App\Job\JobApplications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class CarDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catList = DB::table('car_categories')->pluck('id', 'car_category');
        $cars = CarDetails::with('category')->latest()->Paginate(10);
        return view('car.admin.car.index', compact('cars','catList'));
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
            Storage::delete('public/images/carDetails'.$car->image);
        } else {
            $fileNameToStore1 = 'no-image.jpg';
        }i

        $car->model = $request->input('model');
        $car->description = $request->input('description');
        if($request->hasFile('image')) {
            $car->image = $fileNameToStore1;
        }
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

    public function rent(Request $request, $id){
        if (Auth::check()) {
            $car = CarDetails::find($id)->value('id');

            $rent = new Rent();
            $rent->user_id = Auth::id();
            $rent->car_id = $car;
            $rent->from_date = $request->input('from_date');
            $rent->end_date = $request->input('end_date');
            $rent->with_driver = $request->input('with_driver');
            $rent->save();

            Alert::success('Thank you', 'Vehicle has been booked. We will contact you soon.');

            return redirect()->back();
        }else {
            return response()->json(array("error" => "Unauthorized error"), 401);
        }

    }
    public function rentDetails(){
        $rent = Rent::with('user','car')->get();
        return view('car.admin.car.applicants',compact('rent'));
    }

    public  function sort(Request $request){
        $sort = $request->get('sort');
        $cars = CarDetails::with('category')->where('category_id', 'like', '%'.$sort.'%')->Paginate(10);
        $catList = DB::table('car_categories')->pluck('id', 'car_category');
        return view('car.admin.car.index',['cars' => $cars])->with('catList', $catList);
    }

    public  function search(Request $request){
        $search = $request->get('search');
        $cars = CarDetails::with('category')->where('model', 'like', '%'.$search.'%')->Paginate(10);
        $catList = DB::table('car_categories')->pluck('id', 'car_category');
        return view('car.admin.car.index',['cars' => $cars])->with('catList', $catList);
    }

}
