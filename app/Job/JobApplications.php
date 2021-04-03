<?php

namespace App\Job;

use App\User;
use Illuminate\Database\Eloquent\Model;

class JobApplications extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function job(){
        return $this->belongsTo(Job::class);
    }
}
