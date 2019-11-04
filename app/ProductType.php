<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'product_tbl';

    public function products(){
        return $this->hasMany('App\Products');
    }

    public function products_fuel(){
        return $this->hasMany('App\Fuel');
    }
}
