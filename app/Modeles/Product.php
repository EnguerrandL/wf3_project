<?php

namespace App\Modeles;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'services';
    public function categorie() {
        return $this->belongsTo('App\Modeles\Categorie');
        // return $this->hasMany(Product::class);
    }
}
