<?php

namespace App\Job;


use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function category() {
        return $this->belongsTo(JobCategories::class);
    }
    public function company() {
        return $this->belongsTo(JobCompany::class);
    }
}
