<?php

namespace App\Http\Controllers;

use App\Produit;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Produit::all();

        return view('welcome')->with('products', $products);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Produit::find($id);

        return view('detail')->with('product', $product);
    }
}
