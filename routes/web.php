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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dynamic_pdf', 'DynamicPDFController@index')->name('dynamic_pdf');
Route::get('/dynamic_pdf/pdf', 'DynamicPDFController@pdf')->name('dynamic_pdf');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/stripe', 'HomeController@stripe')->name('stripe');


