<?php


namespace App\Http\Controllers\Panier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PanierController extends Controller
{

    public function panier() {
        return view('panier.panier');
    }


    public function clientinfos() {
        return view('panier.clientinfos');
    }

    public function stripe() {
        return view('panier.stripe');
    }


    public function commande() {
        return view('panier.commande');
    }

}
