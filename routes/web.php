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

Route::get('/vetement', function () { return view('vetement'); })->name('vet');

Route::get('/nouveaute', function () { return view('nouveaute'); })->name('nouv');

Route::get('/chaussure', function () { return view('chaussure'); })->name('chaus');

Route::get('/contact', function () { return view('contact'); })->name('contact');

Route::get('/connect', function () { return view('connect'); })->name('connect');

Route::get('/accueil', function () { return view('accueil'); })->name('accueil');
