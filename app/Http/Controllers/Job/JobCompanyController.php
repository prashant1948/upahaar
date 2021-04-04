<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Job\JobCompany;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class JobCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobcompany = JobCompany::all();
        return view('Job.admin.jobcompany.index',['jobcompany' => $jobcompany]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Job.admin.jobcompany.create');
    }

    /**
     * Store a newly created resource in storage.j
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'email' => 'required',
            'address' => 'required',
            'password' => 'required|required_with:password_confirmation|same:password_confirmation'
        ]);
        $job_company = new JobCompany();
        if($request->hasFile('logo')){
            $filenameWithExt = $request->file('logo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('logo')->getClientOriginalExtension();
            $fileNameToStore1 = $filename.'_'.time().".".$extension;
            $path = $request->file('logo')->storeAs('public/images/jobCompanyLogo', $fileNameToStore1);
        } else {
            $fileNameToStore1 = 'no-image.jpg';
        }
        $job_company->name = $request->input('name');
        $job_company->description = $request->input('description');
        $job_company->email = $request->input('email');
        $job_company->logo = $fileNameToStore1;
        $job_company->address = $request->input('address');
        $job_company->password = Hash::make($request->input('password'));
        $job_company->user_role = 4;
        $job_company->created_at = Carbon::now();
        $job_company->save();

        $user = new User();

        $user->name = $job_company->name;
        $user->email = $job_company->email;
        $user->password = $job_company->password;
        $user->user_role = $job_company->user_role;
        $user->job_company_id = $job_company->id;
        $user->created_at = Carbon::now();
        $user->save();



        Alert::success('Thank you', 'Your account is created.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job\JobCompany  $jobCompany
     * @return \Illuminate\Http\Response
     */
    public function show(JobCompany $jobCompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job\JobCompany  $jobCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(JobCompany $jobCompany)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job\JobCompany  $jobCompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobCompany $jobCompany)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job\JobCompany  $jobCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobCompany $jobCompany)
    {
        //
    }

    public function company(){
        return view('Job.create');
    }
}
