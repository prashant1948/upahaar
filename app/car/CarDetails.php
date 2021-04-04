<?php

namespace App\car;


use Illuminate\Database\Eloquent\Model;

class CarDetails extends Model
{
    public function category() {
        return $this->belongsTo(CarCategories::class);
    }
}
