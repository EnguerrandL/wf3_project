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






// Routes Page principal
Route::get('/', 'HomeController@index')->name('home');
Route::get('/portfolio', 'HomeController@portfolio')->name('portfolio');
Route::get('/dev', 'HomeController@dev')->name('dev');
Route::get('/mentionslegales', 'HomeController@mentionslegales')->name('mentionslegales');




// Ici les routes pour les différentes catégorie
// nom épilation et slug = epilation
// Exemple URL /categorie/epilation



Route::get('/massage', 'CategorieController@massage')->name('massage');
Route::get('/epilation', 'CategorieController@epilation')->name('epilation');
Route::get('/hammam', 'CategorieController@hammam')->name('hammam');
Route::get('/lipomodelage', 'CategorieController@lipomodelage')->name('lipomodelage');
Route::get('/ongles', 'CategorieController@ongles')->name('ongles');
Route::get('/soins', 'CategorieController@soins')->name('soins');
Route::get('/uv', 'CategorieController@uv')->name('uv');


// Route pour le formulaire de contact

Route::get('/contact', 'ContactController@create')->name('contact');
Route::post('/contact', 'ContactController@store');


// Ici les routes pour le générateur de PDF

Route::get('/dynamic_pdf', 'Pdf\DynamicPDFController@index')->name('dynamic_pdf');
Route::get('/dynamic_pdf/pdf', 'Pdf\DynamicPDFController@pdf')->name('dynamic_pdf/pdf');



// ROUTE POUR LES CRUDS
// Ici la personne doit être connecter pour accèder aux pages



// CRUD SERVICES
    Route::get('/admin', 'AdminController@index')->name('admin.index');
    Route::get('{id}/edit', 'Admin\AdminController@edit')->name('admin.edit'); // Edition d'un article
    Route::put('/admin/{id}/update', 'Admin\AdminController@update')->name('admin.update'); // Enregistrer la modification
    Route::get('/admin/destroy/{id}', 'Admin\AdminController@destroy')->name('admin.destroy');
    Route::get('create', 'Admin\AdminController@create')->name('admin.create'); // Formulaire de création
    Route::post('store', 'Admin\AdminController@store')->name('admin.store'); // Sauvegarde de l'article


// CRUD LIVRE D OR


Route::get('/livredor', 'Admin\CommentController@index')->name('livredor.index');
Route::get('/livredor/create', 'Admin\CommentController@create')->name('livredor.create');
Route::post('/livredor/store', 'Admin\CommentController@store')->name('livredor.store');
Route::put('/livredor/{id}/update', 'Admin\CommentController@update')->name('livredor.update');
Route::get('/livredor/destroy/{id}', 'Admin\CommentController@destroy')->name('livredor.destroy');



// FIN DES CRUDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD






Route::resource('admin', 'Admin\AdminController');
