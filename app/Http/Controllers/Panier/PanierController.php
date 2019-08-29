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
        // pk_test_ctkqNVOYRVuUd5wS2MfCjnAm00tdQjuWVS
        // sk_test_TIUwe9zqPGhjVF4t9qHGhBGC00kJ7sA6wH
        \Stripe\Stripe::setApiKey("sk_test_TIUwe9zqPGhjVF4t9qHGhBGC00kJ7sA6wH");
        $charge = \Stripe\Charge::create(['amount' => 2000, 'currency' => 'usd', 'source' => 'tok_189fqt2eZvKYlo2CTGBeg6Uq']);
        dump( $charge);



        return view('panier.clientinfos');
    }

    public function stripe(CardRequest $request) {
        // Sauvegarder du formulaire (Sauvegarde des informations clients)
        //return  vers Stripe
        // pk_test_ctkqNVOYRVuUd5wS2MfCjnAm00tdQjuWVS
        return view('panier.stripe');
    }


    public function commande() {
        return view('panier.commande');
    }

}
