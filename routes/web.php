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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/accueil', function () { return view('accueil'); });

Route::get('/vetement', function () { return view('vetement'); });

Route::get('/nouveaute', function () { return view('nouveaute'); });

Route::get('/chaussure', function () { return view('chaussure'); });
