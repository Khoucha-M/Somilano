@extends('layouts.template')

@section('content')

<div class="row column text-center"style="color: black;font-size: small;">
    <h2>Chaussures les plus populaires</h2>
    <hr>
</div>
<div class="row small-up-2 large-up-4">
        @foreach($produits as $produit)

            <div class="column">
                <img class="thumbnail" src="{{ $produit->image }}" style="height: 250px;width: 250px;">
                <h5>{{ $produit->categorie->label }}</h5>
                <p>{{ $produit->description }}</p>
                <p>{{ $produit->prix }} €</p>
            </div>

        @endforeach
    </div>
        <!--<img class="thumbnail" src="https://mosaic03.ztat.net/vgs/media/pdp-gallery/M3/21/1C/A0/MQ/11/M3211CA0M-Q11@12.jpg"style="height: 250px;width: 250px;">
        <h5>Boots </h5>
        <p>boots a talon en cuir</p>
        <p>49.00€</p>
    </div>
    <div class="column">
        <img class="thumbnail" src="https://mosaic04.ztat.net/vgs/media/pdp-gallery/RA/D1/1N/03/RQ/11/RAD11N03R-Q11@11.jpg"style="height: 250px;width: 250px;">
        <h5>Boots</h5>
        <p>stacise bottines à talons</p>
        <p>37.59.00€</p>

    </div>
    <div class="column">
        <img class="thumbnail" src="https://mosaic04.ztat.net/vgs/media/pdp-zoom/TP/71/1N/09/ZQ/11/TP711N09Z-Q11@11.jpg"style="height: 250px;width: 250px;">
        <h5>Boots</h5>
        <p>Mario western boot</p>
        <p>150.00€</p>

    </div>
    <div class="column">
        <img class="thumbnail" src="https://mosaic04.ztat.net/vgs/media/pdp-gallery/KU/01/1N/00/DQ/11/KU011N00D-Q11@11.jpg"style="height: 250px;width: 250px;">
        <h5>Boots</h5>
        <p>rita bottines à lacets</p>
        <p>229.00€</p>

    </div>
</div>!-->
@endsection
