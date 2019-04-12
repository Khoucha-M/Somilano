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

Route::get('/', 'HomeController@show');


Route::get('/vetement', 'CategorieController@vet')->name('vet');

Route::get('/nouveaute','HomeController@new') ->name('nouv');

Route::get('/chaussure','CategorieController@chas')->name('chaus');

Route::get('/contact', function () { return view('contact'); })->name('contact');

Route::get('/connect', function () { return view('connect'); })->name('connect');

Route::get('/accueil', 'HomeController@show')->name('accueil');


Route::get('/details/{n}', 'ProductController@show')->where('n','[0-9]+')->name('details');

Route::get('/panier', function () { return view('panier'); })->name('panier');

Route::get('/test-contact', function () {
    return new App\Mail\Contact([
        'nom' => 'Durand',
        'email' => 'durand@chezlui.com',
        'message' => 'Je voulais vous dire que votre site est magnifique !'
    ]);
});
