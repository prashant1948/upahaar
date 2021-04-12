<?php

namespace App\Http\Controllers\Job;



use App\Cart;
use App\Department;
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
use RealRashid\SweetAlert\Facades\Alert;

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
        $job->posted_date = $request->input('posted_date');
        $job->apply_before = $request->input('apply_before');

        if (Auth::user()->isAdmin()) {
            $job->company_id = $request->input('company_id');
        } elseif(Auth::user()->isJobCompany()) {
            $job->company_id = Auth::user()->job_company_id;
        }


        $job->save();
        return redirect('/jobs');
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
        $job->posted_date = $request->input('posted_date');
        $job->apply_before = $request->input('apply_before');
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
        return view('Job.admin.job.index',['jobs' => $jobs])->with('catList', $catList);
    }

    public  function search(Request $request){
        $search = $request->get('search');
        $jobs = Job::with('category')->where('name', 'like', '%'.$search.'%')->Paginate(10);
        $catList = DB::table('job_categories')->pluck('id', 'job_category');
        return view('Job.admin.job.index',['jobs' => $jobs])->with('catList', $catList);
    }

    public function application(Request $request, $id){

        if (Auth::check()) {
            if($request->hasFile('cv')){
                $filenameWithExt = $request->file('cv')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('cv')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().".".$extension;
                $path = $request->file('cv')->storeAs('public/images/cv', $fileNameToStore);
            } else {
                $fileNameToStore = 'no-image.jpg';
            }
            if($id) {
                $job = Job::find($id)->value('id');
            }

            $application = new JobApplications();
            $application->user_id = Auth::id();
            $application->job_id = $job;
            $application->cv = $fileNameToStore;
            $application->expected_salary = $request->input('expected_salary');
            $application->save();

            Alert::success('Thank you', 'You have applied successfully');

            return redirect()->back();

        }else {
            return response()->json(array("error" => "Unauthorized error"), 401);
        }
    }
    public function applicationDetails(){
        $application = JobApplications::with('user','job')->get();
        return view('Job.admin.job.applicants',compact('application'));
    }

    public function destroyApplicants($id)
    {
        $job= JobApplications::find($id)->delete();
        return redirect()->back();
    }




}
