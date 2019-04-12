@extends('layouts.app')

@section('head')
    <title>{{ $product->label }}</title>
    <link rel="stylesheet" href="../css/detail.css">
@endsection

@section('content')
    <div id='main'>
        <img id='imgDetail' src="{{ $product->image }}" alt="image indisponible"  style="height: 250px;width: 250px;">
        <div id='contenu'>
            <h4>{{ $product->categorie->label }}</h4>
            <br>
            <p>{{ $product->longDescr }}</p>
            @auth
                <a class="truc btn btn-danger">Acheter pour {{ $product->prix }}€</a>
            @else
                <a href="{{ route('login') }}" class="truc btn btn-success">Se connecter pour acheter</a>
            @endauth
        </div>
    </div>
@endsection
