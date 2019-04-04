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

Route::get('/', function () { return view('accueil'); });

Route::get('/vetement', function () { return view('vetement'); });

Route::get('/nouveaute', function () { return view('nouveaute'); });

Route::get('/chaussure', function () { return view('chaussure'); });
