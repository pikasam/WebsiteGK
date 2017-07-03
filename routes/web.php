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

//Dit word de route naar de home page van de front-end
Route::get('/', function () {
    return view('welcome');
});

// Front-end
Route::get('/contact', 'ContactController@index')->name('contact');

// Login/Registratie/etc...
Auth::routes();

// Back-end
// Category
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/crud/edit/{id}', 'HomeController@edit');
Route::get('/crud/delete/{id}', 'HomeController@delete');

// Detail en Sortedmap
// Route::get('/sortedcat', 'HomeController@sorted');
// Route::get('/detailmap', 'DetailmapController@index');
// Route::post('/detailmap/edit/{id}', 'DetailmapController@edit');
// Route::get('/detailmap/delete/{id}', 'DetailmapController@delete');