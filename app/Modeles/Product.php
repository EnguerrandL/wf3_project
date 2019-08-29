<?php

namespace App\Modeles;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Modeles\Category');
        // return $this->hasMany(Product::class);
    }
}
