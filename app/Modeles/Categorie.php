<?php

namespace App\Modeles;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function services()
    {
        return $this->hasMany('App\Modeles\Service');
    }
}
