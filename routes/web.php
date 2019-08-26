<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route Page principal



Route::get('/', function () {
    return view('home');
});





// Ici la personne doit être connecter pour accèder aux pages

Route::prefix('admin')->middleware('auth')->namespace('Admin')->group(function() {

    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('/edit', 'AdminController@edit')->name('admin.edit');

    //  Admin index = Tableau de bord administration...
    //  Admin edit = Edition et mise à jour d'une commande

});


// Ici les routes pour le tunnel d'achat

Route::prefix('panier')->namespace('Panier')->group(function() {

    Route::get('/panier', 'PanierController@panier')->name('panier.panier');
    Route::get('/clientinfos', 'PanierController@clientinfos')->name('panier.clientsinfos');
    Route::get('/stripe', 'PanierController@stripe')->name('panier.stripe');
    Route::get('/commande', 'PanierController@commande')->name('panier.commande');

//  Panier panier = Visuel du panier
// Formulaire client avec ses infos avant de proceder aux paiement.
// Panier stripe = visuel bloque STRIPE (achat de la commande)
// Panier commande = visuel de la commande du client (recapitulatif) avec accès facture + pdf

});

// Autre routes // tests

Route::get('/dynamic_pdf', 'DynamicPDFController@index')->name('dynamic_pdf');
Route::get('/dynamic_pdf/pdf', 'DynamicPDFController@pdf')->name('dynamic_pdf');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/stripe', 'HomeController@stripe')->name('stripe');


