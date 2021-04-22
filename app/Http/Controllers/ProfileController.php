<?php

namespace App\Http\Controllers;

use App\BarCode;
use App\Department;
use App\Job\Job;
use App\Job\JobApplications;
use App\Job\JobCompany;
use App\Cart;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{
    public function showProfile() {
        $profileCarts = Cart::where('user_id', Auth::id())->get();
        $barcode = BarCode::first();
        return view('main.profile', compact('profileCarts','barcode'));
    }
    public function showProfileMart() {
        $profileCarts = Cart::where('user_id', Auth::id())->get();
        $barcode = BarCode::first();
        $departmentsLists = Department::orderBy('created_at', 'desc')->take(5)->get();
        return view('eazymart.profile', compact('profileCarts','barcode','departmentsLists'));
    }
    public function showProfileJob(){
        $job = Job::where('company_id', '=', Auth::user()->job_company_id)->value('id');

        $jobapplicants = JobApplications::with('user','job')->where('job_id','=',$job)->get();
        $jobs = DB::table('jobs')
            ->select('jobs.id','jobs.name','jobs.salary','jobs.job_type','job_companies.id AS company_id','job_companies.name AS company_name','job_companies.logo','job_companies.address as company_address')
            ->join('job_companies', 'job_companies.id', '=', 'jobs.company_id')
            ->get();
        return view('Job.applicants', compact('jobapplicants','job','jobs'));
    }
}
