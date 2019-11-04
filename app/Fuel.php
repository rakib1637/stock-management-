<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fuel extends Model
{
    protected $table = 'products_fuel';

    public function product_fuel_type(){
        return $this->belongsTo('App\ProductType');
    }
}
