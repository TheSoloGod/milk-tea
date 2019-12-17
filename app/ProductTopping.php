<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductTopping extends Model
{
    protected $table = 'product_topping';

    protected $fillable = ['product_id', 'topping_id'];
}
