<?php

namespace App\Http\Controllers;

use App\Produit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show()
    {
        $produits = Produit::where('mis_en_avant', 1)->get();

        return view('accueil')->with('produits', $produits);
    }
}
