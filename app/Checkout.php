<?php

namespace App;

use App\Cart;
use Illuminate\Database\Eloquent\Model;
use App\BuyNow;

class checkout extends Model
{
    public function cart() {
        return $this->hasOne(Cart::class);
    }

    public function buy() {
        return $this->hasOne(BuyNow::class);
    }
}
