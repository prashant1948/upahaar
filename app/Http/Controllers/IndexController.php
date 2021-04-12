<?php

namespace App\Http\Controllers;

use App\AboutUs;
use App\Banner;
use App\car\CarCategories;
use App\car\CarDetails;
use App\checkout;
use App\Frontend;
use App\Job\Job;
use App\Job\JobCategories;
use App\Job\JobCompany;
use App\PopUp;
use App\ProductImage;
use App\User;
use Illuminate\Http\Request;
use App\Department;
use App\Product;
use App\Cart;
use App\CartItem;
use Auth;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index() {
        $featured_products = Product::where('featured', '=', 1)
                ->orderBy('created_at', 'desc')
                ->take(10)
                ->get();
        $new_arrival = Product::where('new_arrival', '=', 1)
                ->orderBy('created_at', 'desc')
                ->take(10)
                ->get();
        $top_sales = Product::where('top_sales', '=', 1)
                ->orderBy('created_at', 'desc')
                ->take(10)
                ->get();


        $dairyDepartment = Department::where('department_name', '=', 'Dairy')->value('id');
        $fruitDepartment = Department::where('department_name', '=', 'Fruits & Vegetables')->value('id');
        $bakeryDepartment = Department::where('department_name', '=', 'Bakery')->value('id');
        $chipsDepartment = Department::where('department_name', '=', 'Chips')->value('id');
        $dairy= Product::select()->where('dept_id', $dairyDepartment)->get();
        $fruits= Product::select()->where('dept_id', $fruitDepartment)->get();
        $bakery= Product::select()->where('dept_id', $bakeryDepartment)->get();
        $chips= Product::select()->where('dept_id', $chipsDepartment)->get();

        $frontEnd = Frontend::orderBy('created_at', 'desc')->get();
        $banner = Banner::first();
        $popup = PopUp::first();
        $products = Product::get();
        return view('main.index', [
            'featured' => $featured_products,
            'new_arrival' => $new_arrival,
            'top_sales' => $top_sales,
            'frontEnd' => $frontEnd,
            'banner' => $banner,
            'products' => $products,
            'popup' => $popup,
            'dairy' => $dairy,
            'fruits' => $fruits,
            'bakery' => $bakery,
            'chips' => $chips
        ]);
    }
    public function home() {
        $featured_products = Product::where('featured', '=', 1)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        $new_arrival = Product::where('new_arrival', '=', 1)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        $top_sales = Product::where('top_sales', '=', 1)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
//        $products = Product::get();
        return view('main.home', [
            'featured' => $featured_products,
            'new_arrival' => $new_arrival,
            'top_sales' => $top_sales
        ]);
    }

    public function about() {
        $about = AboutUs::first();
        return view('main.about', compact('about'));
    }

    public function blog() {
        return view('main.blog');
    }


    public function contact() {
        return view('main.contact');
    }

    public function faq() {
        return view('main.faq');
    }
    public function carousel() {
        $featured_products = Product::where('featured', '=', 1)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        $new_arrival = Product::where('new_arrival', '=', 1)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        $top_sales = Product::where('top_sales', '=', 1)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        $products = Product::get();
        return view('carousel', [
            'featured' => $featured_products,
            'new_arrival' => $new_arrival,
            'top_sales' => $top_sales,
            'products' => $products
        ]);
    }
    public function indexMart() {
        $featured_products = Product::where('featured', '=', 1)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        $new_arrival = Product::where('new_arrival', '=', 1)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        $top_sales = Product::where('top_sales', '=', 1)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();


        $dairyDepartment = Department::where('department_name', '=', 'Dairy')->value('id');
        $fruitDepartment = Department::where('department_name', '=', 'Fruits & Vegetables')->value('id');
        $bakeryDepartment = Department::where('department_name', '=', 'Bakery')->value('id');
        $chipsDepartment = Department::where('department_name', '=', 'Chips')->value('id');
        $nutsDepartment = Department::where('department_name', '=', 'Nuts')->value('id');
        $oilDepartment = Department::where('department_name', '=', 'Oils')->value('id');
        $dairy= Product::select()->where('dept_id', $dairyDepartment)->take(6)->get();
        $fruits= Product::select()->where('dept_id', $fruitDepartment)->get();
        $bakery= Product::select()->where('dept_id', $bakeryDepartment)->take(6)->get();
        $chips= Product::select()->where('dept_id', $chipsDepartment)->take(3)->get();
        $nuts= Product::select()->where('dept_id', $nutsDepartment)->take(3)->get();
        $oil= Product::select()->where('dept_id', $oilDepartment)->take(3)->get();

        $frontEnd = Frontend::orderBy('created_at', 'desc')->get();

        if (Auth::check()) {
            $cart = Cart::where([
                ['user_id', '=', Auth::id()],
                ['checkout', '=', 0]
            ])->get();
            if ($cart[0] ?? '') {
                $grand_total = $cart[0]->grand_total;
                $carts = CartItem::where('cart_id', $cart[0]->id)->get();
            } else {
                $grand_total = 0;
                $carts = 0;
            }
            $banner = Banner::first();
            $popup = PopUp::first();
            $products = Product::get();

            return view('eazymart.index',[
                'featured' => $featured_products,
                'new_arrival' => $new_arrival,
                'top_sales' => $top_sales,
                'frontEnd' => $frontEnd,
                'banner' => $banner,
                'products' => $products,
                'popup' => $popup,
                'dairy' => $dairy,
                'oil' => $oil,
                'nuts' => $nuts,
                'fruits' => $fruits,
                'bakery' => $bakery,
                'chips' => $chips,
                'grand_total' => $grand_total,
                'carts' => $carts
            ]);
        }
        $banner = Banner::first();
        $popup = PopUp::first();
        $products = Product::get();

        return view('eazymart.index',[
            'featured' => $featured_products,
            'new_arrival' => $new_arrival,
            'top_sales' => $top_sales,
            'frontEnd' => $frontEnd,
            'banner' => $banner,
            'products' => $products,
            'popup' => $popup,
            'dairy' => $dairy,
            'oil' => $oil,
            'nuts' => $nuts,
            'fruits' => $fruits,
            'bakery' => $bakery,
            'chips' => $chips,
            'auth'=> 0
        ]);
    }

    public function car(){
        $catList = CarCategories::with('cars')->get();
        $cars = CarDetails::all()->groupBy('category_id');
//        dd($cars);


        return view('car.index', compact('catList','cars'));
    }

    public function searchJob(Request $request) {
        $jobs = Job::where('name', 'LIKE', '%'.$request->input('query').'%')
            ->get();

        return view('Job.job_search', compact('jobs'));
    }
    public function liveJobSearch(Request $request) {
        $search = $request->get('query');
        $data = Job::where('name', 'LIKE', '%'.$search.'%')
            ->get();
        return response()->json($data);

    }
    public function searchCar(Request $request) {
        $cars = CarDetails::where('model', 'LIKE', '%'.$request->input('query').'%')
            ->get();

        return view('car.car_search', compact('cars'));
    }
    public function liveCarSearch(Request $request) {
        $search = $request->get('query');
        $data = CarDetails::where('model', 'LIKE', '%'.$search.'%')
            ->get();
        return response()->json($data);
    }

    public function searchAll(Request $request)
    {
        $cars = CarDetails::where('model', 'LIKE', '%' . $request->input('query') . '%')
                ->get();
        $jobs = Job::where('name', 'LIKE', '%'.$request->input('query').'%')
            ->get();
        $products = Product::where('name', 'LIKE', '%'.$request->input('query').'%')
            ->orWhere('brand', 'LIKE', '%'.$request->input('query').'%')
            ->orWhere('tags', 'LIKE', '%'.$request->input('query').'%')->get();


        if(count($cars) >= 1){
            return view('car.car_search',compact('cars'));
        }
        elseif(count($jobs) >= 1){
            return view('Job.job_search',compact('jobs'));
        }
        else{
            return view('eazymart.product_search',compact('products'));
        }

    }

    public function aboutMart() {
        $about = AboutUs::first();
        return view('eazymart.about', compact('about'));
    }
    public function contactMart() {
        return view('eazymart.contact');
    }
    public function singleMart() {
        return view('eazymart.single');
    }
    public function multi() {
        $top_sales = Product::where('top_sales', '=', 1)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        $jobs = DB::table('jobs')
            ->select('jobs.id','jobs.name','jobs.salary','jobs.job_type','job_companies.name AS company_name','job_companies.logo','job_companies.address as company_address')
            ->join('job_companies', 'job_companies.id', '=', 'jobs.company_id')
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();
        $cars = CarDetails::with('category')->orderBy('id', 'desc')
            ->take(3)
            ->get();
        $banner = Banner::first();
        return view('multiservice',compact('top_sales','jobs','cars','banner'));
    }

    public function showJob(Request $request, $id) {
        $job = Job::find($id);
        $departments = JobCategories::all();
        $jobs = DB::table('jobs')
            ->select('jobs.id','jobs.name','jobs.salary','jobs.job_type','job_companies.id AS company_id','job_companies.name AS company_name','job_companies.logo','job_companies.address as company_address')
            ->join('job_companies', 'job_companies.id', '=', 'jobs.company_id')
            ->get();
//        $productImg = ProductImage::with('products')->where('p_id','=',$product->id)->get();
        return view('Job.single', compact('job', 'departments','jobs'));
    }
    public function showJobCompany(Request $request, $id) {
        $company = JobCompany::find($id);
        $job = Job::find($id);
        $departments = JobCategories::all();
        $jobs = DB::table('jobs')
            ->select('jobs.id','jobs.name','jobs.salary','jobs.job_type','job_companies.id AS company_id','job_companies.name AS company_name','job_companies.logo','job_companies.address as company_address')
            ->join('job_companies', 'job_companies.id', '=', 'jobs.company_id')
            ->get();
        return view('Job.companySingle', compact('company','jobs','job','departments'));
    }

    public function magnify(){
        return view('magnify');
    }

}
