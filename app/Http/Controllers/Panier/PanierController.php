<?php


namespace App\Http\Controllers\Panier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function commande() {
        return view('panier.commande');
    }



    public function panier() {
        return view('panier.panier');
    }



    public function stripe() {
        return view('panier.stripe');
    }
}
