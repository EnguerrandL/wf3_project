<?php

namespace App\Modeles;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function push()
    {
        return $this->hasMany('App\Modeles\Service');
        // return $this->hasMany(Product::class);
    }
}
