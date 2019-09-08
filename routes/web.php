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
Auth::routes();

// Routes Page principal
Route::get('/', 'HomeController@index')->name('home');
Route::get('/portfolio', 'HomeController@portfolio')->name('portfolio');
Route::get('/dev', 'HomeController@dev')->name('dev');
Route::get('/mentionslegales', 'HomeController@mentionslegales')->name('mentionslegales');

// AccÃ¨s pannel adminnistration
Route::get('/gate', 'HomeController@admin')->middleware('auth')->name('gate');

// Ici les routes pour les diffÃ©rentes catÃ©gorie
// nom Ã©pilation et slug = epilation
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

// Ici les routes pour le gÃ©nÃ©rateur de PDF
Route::get('/dynamic_pdf', 'Pdf\DynamicPDFController@index')->name('dynamic_pdf');
Route::get('/dynamic_pdf/pdf', 'Pdf\DynamicPDFController@pdf')->name('dynamic_pdf/pdf');

// ROUTE POUR LES CRUDS
// Ici la personne doit Ãªtre connecter pour accÃ¨der aux pages
// CRUD SERVICES
Route::middleware('auth')->group(function() {
    Route::get('{id}/edit', 'Admin\AdminController@edit')->name('admin.edit'); // Edition d'un article
    Route::put('/admin/{id}/update', 'Admin\AdminController@update')->name('admin.update'); // Enregistrer la modification
    Route::get('/admin/destroy/{id}', 'Admin\AdminController@destroy')->name('admin.destroy');
    Route::get('create', 'Admin\AdminController@create')->name('admin.create'); // Formulaire de crÃ©ation
    Route::post('store', 'Admin\AdminController@store')->name('admin.store'); // Sauvegarde de l'article
    Route::get('admin/categorie/{slug}', 'Admin\AdminController@show')->name('admin.show');
    Route::get('admin/categories', 'Admin\AdminController@index')->name('admin.index');
    Route::resource('admin', 'Admin\AdminController');
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
});

// CRUD LIVRE D OR
Route::middleware('auth')->group(function() {

Route::put('/livredor/{id}/update', 'Admin\CommentController@update')->name('livredor.update');
Route::get('/livredor/destroy/{id}', 'Admin\CommentController@destroy')->name('livredor.destroy');
Route::get('/livredor/create', 'Admin\CommentController@create')->name('livredor.create');
Route::put('/livredor/update/{id}', 'Admin\CommentController@onComment')->name('livredor.update');


Route::put('/livredor/{id}/update', 'Admin\CommentController@showComment')->name('livredor.showComment');
});

Route::post('/livredor/store', 'Admin\CommentController@store')->name('livredor.store');

// Vue Livre d'or
Route::get('/livredor', 'Admin\CommentController@index')->name('livredor.index');

