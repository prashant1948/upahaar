<?php

namespace App\car;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function car(){
        return $this->belongsTo(CarDetails::class);
    }
}
