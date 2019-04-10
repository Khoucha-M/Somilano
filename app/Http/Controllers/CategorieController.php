<?php

namespace App\Http\Controllers;

use App\Produit;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function vet()
    {
        $produits = Produit::whereHas('categorie', function ($query) {
            $query->where('menu', '=', 'V');
        })->get();

        return view('vetement')->with('produits', $produits);
     }

public function chas()
{
    $produits = Produit::whereHas('categorie', function ($query) {
        $query->where('menu', '=', 'C');
    })->get();

    return view('chaussure')->with('produits', $produits);
}
}
