<?php

namespace App\Http\Controllers;

use App\BarCode;
use App\Job\Job;
use App\Job\JobApplications;
use App\Job\JobCompany;
use App\Cart;
use App\User;
use Auth;


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
        return view('eazymart.profile', compact('profileCarts','barcode'));
    }
    public function showProfileJob(){
        $job = Job::where('company_id','=', Auth::user()->job_company_id)->value('id');
        $jobapplicants = JobApplications::with('user','job')->where('job_id','=',$job)->get();
        return view('Job.applicants', compact('jobapplicants','job'));
    }
}
