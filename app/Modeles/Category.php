<?php

namespace App\Modeles;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function services()
    {
        return $this->hasMany('App\Modeles\Product');
        // return $this->hasMany(Product::class);
    }
}
