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
    return view('jem.main');
});

Route::get('/about', function () {
    return view('jem.about');
});

Route::get('/order', function () {
    return view('jem.order');
});

Route::get('/contact', function () {
    return view('jem.contact');
});

Route::get('/policy', function () {
    return view('jem.privpolicy');
});

Route::get('/terms', function () {
    return view('jem.term');
});

Route::get('/facts', function () {
    return view('jem.facts');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
