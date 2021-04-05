<?php

namespace App\Http\Controllers\Job;


use App\Department;
use App\Http\Controllers\Controller;
use App\Job\Job;
use App\Job\JobCategories;
use App\Product;
use Illuminate\Http\Request;

class JobCategoriesController extends Controller
{
//    public function __construct() {
//        $this->middleware('role:1');
//    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobcategories = JobCategories::all();
        return view('Job.admin.carcategory.index',['jobcategories' => $jobcategories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Job.admin.carcategory.create');
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
            'job_category' => 'required',
        ]);

        $job_category = new JobCategories();
        $job_category->job_category = $request->input('job_category');
        $job_category->save();
        return redirect('/carcategory');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobCategories  $jobCategories
     * @return \Illuminate\Http\Response
     */
    public function show(JobCategories $jobCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobCategories  $jobCategories
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job_category = JobCategories::find($id);
        return view('Job.admin.carcategory.edit', compact('job_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobCategories  $jobCategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $job_category = JobCategories::find($id);
        $job_category->job_category = request('job_category');
        $job_category->save();
        return redirect('/carcategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobCategories  $jobCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job_category= JobCategories::find($id)->delete();
        return redirect()->back();
    }

    public function getJobCategories() {
        $jobCat = JobCategories::all();
        return response()->json(array('view' => view('partial.joblist', compact('jobCat'))->render()));

    }

    public function showJobCat(Request $request, $id) {
        $items = $request->input('items');
        if ($items == null) {
            $items = 9;
        }
        $jobs = Job::where('category_id', $id)->paginate($items);
        $jobCat = JobCategories::all();
        $current_department = JobCategories::find($id);
//        $productsDisplay = Product::get();
        return view('Job.jobs_categories', compact('jobs', 'jobCat', 'current_department', 'items'));
    }
}
