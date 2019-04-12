@extends('layouts.template')

@section('content')
    <img src="https://somilano.fr/wp-content/uploads/2018/05/so-milano.png" class="img-fluid" alt="Responsive image">
<div class="row column text-center">
    <h2>Great products</h2>
    <hr>
</div>
<div class="row small-up-2 medium-up-3 large-up-6">
        @foreach($produits as $produit)

            <div class="column">
               <!-- <img class="thumbnail" src="{{ $produit->image }}" style="height: 250px;width: 250px;">--!>
                   <a href="/details/{{$produit->id}}"><img class="thumbnail" src="{{ $produit->image }}" style="height: 250px;width: 250px;"></a>
                <h5>{{ $produit->categorie->label }}</h5>
                <p>{{ $produit->description }}</p>
                <p>{{ $produit->prix }} €</p>
            </div>

        @endforeach
</div>
@endsection
