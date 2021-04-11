<?php

namespace App\car;



use Illuminate\Database\Eloquent\Model;

class CarCategories extends Model
{
    public function cars()
    {
        return $this->hasMany(CarDetails::class,'category_id','id');
    }

}
