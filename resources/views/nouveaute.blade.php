@extends('layouts.template')

@section('content')
    <img src="https://somilano.fr/wp-content/uploads/2018/05/so-milano.png" class="img-fluid" alt="Responsive image">
<div class="row column text-center">
    <h2>Viiiite Nouveaux produits </h2>
    <hr>
</div>
<div class="row small-up-2 medium-up-3 large-up-6">

    @foreach($produits as $produit)

        <div class="column">
        <!--<img class="thumbnail" src="{{ $produit->image }}" style="height: 250px;width: 250px;">--!>
            <a href="/details/{{$produit->id}}"><img class="thumbnail" src="{{ $produit->image }}" style="height: 250px;width: 250px;"></a>
        <h5>{{ $produit->categorie->label }}</h5>
        <p>{{ $produit->description }}</p>
        <p>{{ $produit->prix }} €</p>
    </div>

    @endforeach

</div>
<!--
<div class="row small-up-2 medium-up-3 large-up-6">
    <div class="column">
        <img class="thumbnail" src="https://mosaic04.ztat.net/vgs/media/pdp-zoom/M0/Q2/1C/15/ZQ/11/M0Q21C15Z-Q11@7.jpg">
        <h5>Chemisier</h5>
        <p>yasmegan fest </p>
        <p>35€</p>
    </div>
    <div class="column">
        <img class="thumbnail" src="https://mosaic04.ztat.net/vgs/media/packshot/pdp-zoom/Y0/12/1E/0G/DA/11/Y0121E0GD-A11@5.png">
        <h5>Chemisier  </h5>
        <p>chemisier a rayure</p>
        <p>25€</p>
    </div>
    <div class="column">
        <img class="thumbnail" src="https://mosaic04.ztat.net/vgs/media/packshot/pdp-zoom/M7/52/1C/03/HQ/11/M7521C03H-Q11@6.jpg">
        <h5>Robe </h5>
        <p>robe d 'ete a rayure</p>
        <p>269.95€</p>
    </div>
    <div class="column">
        <img class="thumbnail" src="https://mosaic03.ztat.net/vgs/media/packshot/pdp-zoom/YC/02/1T/00/3Q/11/YC021T003-Q11@2.1.jpg">
        <h5>Combinaison  </h5>
        <p>combinaison long </p>
        <p>229.55€</p>

    </div>
    <div class="column">
        <img class="thumbnail" src="https://mosaic04.ztat.net/vgs/media/packshot/pdp-gallery/AM/92/1C/00/KK/11/AM921C00K-K11@8.jpg">
        <h5>Robe   </h5>
        <p>robe fourreau </p>
        <p>359.00€</p>
    </div>
    <div class="column">
        <img class="thumbnail" src="https://mosaic04.ztat.net/vgs/media/packshot/pdp-gallery/AM/92/1C/00/IQ/11/AM921C00I-Q11@11.jpg">
        <h5>Robe</h5>
        <p>robe longue à fleur </p>
        <p>454.75€</p>
    </div>
</div>
 --!>
@endsection
