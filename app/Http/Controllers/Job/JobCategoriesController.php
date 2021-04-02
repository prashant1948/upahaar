<?php

namespace App\Http\Controllers\Job;


use App\Http\Controllers\Controller;
use App\Job\JobCategories;
use Illuminate\Http\Request;

class JobCategoriesController extends Controller
{
    public function __construct() {
        $this->middleware('role:1');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobcategories = JobCategories::all();
        return view('Job.admin.jobcategory.index',['jobcategories' => $jobcategories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Job.admin.jobcategory.create');
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
        return redirect('/jobcategory');
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
        return view('Job.admin.jobcategory.edit', compact('job_category'));
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
        return redirect('/jobcategory');
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
}
