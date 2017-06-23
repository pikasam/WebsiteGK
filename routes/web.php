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

Auth::routes();

// Front-end
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'ContactController@index')->name('contact');

// Back-end
//Route::get('/crud/create', 'HomeController@create');
Route::post('/crud/edit/{id}', 'HomeController@edit');
Route::get('/crud/delete/{id}', 'HomeController@delete');
Route::get('/searchResults', 'searchResultsController@index')->name('searchResults');