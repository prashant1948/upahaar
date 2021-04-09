<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyNow extends Model
{
    protected $table = 'buy_now';

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
