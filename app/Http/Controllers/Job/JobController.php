<?php

namespace App\Http\Controllers\Job;



use App\Cart;
use App\Http\Controllers\Controller;
use App\Job\Job;
use App\Job\JobApplications;
use App\Job\JobCategories;
use App\Job\JobCompany;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    public function __construct() {
        $this->middleware('role:1,4');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->isAdmin()) {
            $jobs = Job::with('category')->latest()->Paginate(10);
            $catList = DB::table('job_categories')->pluck('id', 'job_category');
        } else {
            $jobs = Job::where('company_id', Auth::user()->company_id)->get();
        }
        return view('Job.admin.job.index',['jobs' => $jobs,'catList' => $catList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $job_category = JobCategories::all();
        $job_company = JobCompany::all();
        return view('Job.admin.job.create', compact('job_category', 'job_company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $this->validate($request, [
//            'name' => 'required',
//            'description' => 'required',
//            'vacancy' => 'required',
//            'salary' => 'required',
//            'job_type' => 'required',
//            'category_id' => 'required',
//            'company_id' => 'required',
//
//        ]);

        $job = new Job();
        $job->name = $request->input('name');
        $job->description = $request->input('description');
        $job->vacancy = $request->input('vacancy');
        $job->salary = $request->input('salary');
        $job->job_type = $request->input('job_type');
        $job->category_id = $request->input('category_id');

        if (Auth::user()->isAdmin()) {
            $job->company_id = $request->input('company_id');
        } else {
            $job->company_id = Auth::user()->job_company_id;
        }


        $job->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job_category = JobCategories::all();
        $company = JobCompany::all();
        $jobs = Job::find($id);

        return view('Job.admin.job.edit', compact('jobs','job_category','company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $job = Job::find($id);
        $job->name = $request->input('name');
        $job->description = $request->input('description');
        $job->vacancy = $request->input('vacancy');
        $job->salary = $request->input('salary');
        $job->job_type = $request->input('job_type');
        $job->category_id = $request->input('category_id');

        if (Auth::user()->isAdmin()) {
            $job->company_id = $request->input('company_id');
        } else {
            $job->company_id = Auth::user()->company_id();
        }
        $job->save();
        return redirect('/jobs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job\  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job= Job::find($id)->delete();
        return redirect('/jobs');
    }

    public function postJob()
    {
        $job_category = JobCategories::all();
        $job_company = JobCompany::all();
        return view('Job.postjob', compact('job_category', 'job_company'));
    }


    public  function sort(Request $request){
        $sort = $request->get('sort');
        $jobs = Job::with('category')->where('category_id', 'like', '%'.$sort.'%')->Paginate(10);
        $catList = DB::table('job_categories')->pluck('id', 'job_category');
        return view('jobs',['jobs' => $jobs])->with('catList', $catList);
    }

    public  function search(Request $request){
        $search = $request->get('search');
        $jobs = Job::with('category')->where('name', 'like', '%'.$search.'%')->Paginate(10);
        $catList = DB::table('job_categories')->pluck('id', 'job_category');
        return view('jobs',['items' => $jobs])->with('catList', $catList);
    }

    public function application(Request $request){
        if (Auth::check()) {

            $job= Job::find($request->input('job'));


            $application = new JobApplications();
            $application->user_id = Auth::id();
            $application->job_id = $job;
            $application->save();

            return redirect()->back();

        }else {
            return response()->json(array("error" => "Unauthorized error"), 401);
        }
    }
}
