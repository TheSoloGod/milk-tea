<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductStore extends Model
{
    protected $table = 'product_store';

    protected $fillable = ['store_id', 'product_id'];
}
