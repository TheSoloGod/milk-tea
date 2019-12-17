<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function store()
    {
        return $this->belongsToMany(Store::class);
    }

    public function topping()
    {
        return $this->belongsToMany(Topping::class);
    }
}
