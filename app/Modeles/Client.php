<?php

namespace App\Modeles;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    public function gift()
    {
        return $this->hasMany('App\Modeles\Bon_cadeau');
    }
}



