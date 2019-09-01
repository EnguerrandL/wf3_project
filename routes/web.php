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

// categories/index => Cateogires (epilations, massages, etc.)
// categories/show => Epilation (demi jabmes, etc.)
// categories/create => formulaire d'ajout d'une catégorie
// categorie/edit-update-store-destroy ... (Route::ressource)

// products/index => Liste de tous les products
// proucts/show => détail d'un produit (prix, description complete, etc.)
// proucts/edit => changer le prix d'un produit

// Route::resource('products/, ProductCOntroller);

Auth::routes();


// ROUTES TEST
Route::get('/stripe', 'HomeController@stripe')->name('stripe');



// Routes Page principal
Route::get('/', 'HomeController@index')->name('home');
Route::get('/portfolio', 'HomeController@portfolio')->name('portfolio');
Route::get('/chequecadeau', 'HomeController@chequecadeau')->name('chequecadeau');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/dev', 'HomeController@dev')->name('dev');
Route::get('/mentionslegales', 'HomeController@mentionslegales')->name('mentionslegales');



// Ici les routes pour les différentes catégorie
// nom épilation et slug = epilation
// Exemple URL /categorie/epilation

Route::get('/categorie/{slug}', 'CategorieController@show')->name('categorie.show');
Route::get('/categories', 'CategorieController@index')->name('categories');


// Route::prefix('categorie')->namespace('Categorie')->group(function() {

//     Route::get('/cellum6', 'CategorieController@cellum6')->name('categorie.cellum6');
//     Route::get('/epilation', 'CategorieController@epilation')->name('categorie.epilation');
//     Route::get('/hammam', 'CategorieController@hammam')->name('categorie.hammam');
//     Route::get('/mainpied', 'CategorieController@mainpied')->name('categorie.mainpied');
//     Route::get('/massage', 'CategorieController@massage')->name('categorie.massage');
//     Route::get('/soins', 'CategorieController@soins')->name('categorie.soins');
//     Route::get('/uv', 'CategorieController@uv')->name('categorie.uv');
// });

// Ici la personne doit être connecter pour accèder aux pages

Route::prefix('admin')->middleware('auth')->namespace('Admin')->group(function() {

    Route::get('/', 'AdminController@index')->name('admin.index');
    // Route::get('/edit', 'AdminController@edit')->name('admin.edit');
    Route::get('{admin}/edit', 'AdminController@edit')->name('admin.edit');
    Route::patch('{admin}', 'AdminController@update');
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
// Panier clientsinfos = Formulaire client avec ses infos avant de proceder aux paiement.
// Panier stripe = visuel bloque STRIPE (achat de la commande)
// Panier commande = visuel de la commande du client (recapitulatif) avec accès facture + pdf
});


// Ici les routes pour le générateur de PDF

Route::get('/dynamic_pdf', 'Pdf\DynamicPDFController@index')->name('dynamic_pdf');
Route::get('/dynamic_pdf/pdf', 'Pdf\DynamicPDFController@pdf')->name('dynamic_pdf/pdf');


Route::resource('admin', 'Admin\AdminController');










