@extends('layouts.template')

@section('content')

<img src="https://somilano.fr/wp-content/uploads/2018/05/so-milano.png" class="img-fluid" alt="Responsive image">
<!--<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
    <ul class="orbit-container">
        <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
        <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
        <li class="orbit-slide is-active">
        <li class="orbit-slide">
            <img src="https://scontent-mrs1-1.xx.fbcdn.net/v/t1.0-9/35521484_241714056589436_2441651348286996480_n.jpg?_nc_cat=103&_nc_ht=scontent-mrs1-1.xx&oh=2d36122bb4bfa1380024acd14546537b&oe=5D4EAFF8">
        </li>

        <li class="orbit-slide">
        <img src="https://placehold.it/2000x750">
        </li>
        <li class="orbit-slide">
        <img src="https://placehold.it/2000x750">
        </li>
        </ul>
        </div>
        --!>

        <div class="row column text-center">
            <h2>Produits Populaires</h2>
            <hr>
        </div>
        <div class="row small-up-2 large-up-4">

            @foreach($produits as $produit)

                <div class="column">
                    <a href="/details/{{$produit->id}}"><img class="thumbnail" src="{{ $produit->image }}" style="height: 250px;width: 250px;"></a>
                    <h5>{{ $produit->categorie->label }}</h5>
                    <p>{{ $produit->description }}</p>
                    <p>{{ $produit->prix }} €</p>
                </div>

            @endforeach

            <!--
            <div class="column">
                <img class="thumbnail" src="https://scontent-cdg2-1.xx.fbcdn.net/v/t45.5328-0/p180x540/46586770_1706731002765434_2019769295055093760_n.jpg?_nc_cat=109&_nc_ht=scontent-cdg2-1.xx&oh=e3bcdd7263104d773c0f9acc83293f98&oe=5D445D28"style="height: 250px;width: 250px;">
                <h5>Gilet </h5>
                <p>avec des bonbon</p>
                <p>45.00€</p>

            </div>
            <div class="column">
                <img class="thumbnail" src="https://scontent-cdg2-1.xx.fbcdn.net/v/t45.5328-0/p180x540/41898049_1708271705966881_7388466745628950528_n.jpg?_nc_cat=100&_nc_ht=scontent-cdg2-1.xx&oh=37b357ef35d5902f7e604b9937a87aaa&oe=5D44B43E"style="height: 250px;width: 250px;">
                <h5>Jean</h5>
                <p>Jeanboyfriend</p>
                <p>15.00€</p>

            </div>
            <div class="column">
                <img class="thumbnail" src="https://scontent-cdg2-1.xx.fbcdn.net/v/t45.5328-0/p180x540/45638681_2492196167487749_6810023994767441920_n.jpg?_nc_cat=100&_nc_ht=scontent-cdg2-1.xx&oh=bee35497fe4fec7e1609c7fafb5f9102&oe=5D46CAFF"style="height: 250px;width: 250px;">
                <h5>Chemisier </h5>
                <p>Chemisier ananas</p>
                <p>29.00€</p>
            </div>
            -->

        </div>
        <hr>
<div style="text-align: center">
    <img src="http://51.75.126.43/presta/modules/ps_banner/img/2f5b02b022de2b86238780c32c3a2e95.jpg">
</div>
        <!--<div class="row column">
            <div class="callout primary">
                <h3>Really big special this week on items.</h3>
            </div>
        </div>
        <hr>
        <div class="row column text-center">
            <h2>Some Other Neat Products</h2>
            <hr>
        </div>
        <div class="row small-up-2 medium-up-3 large-up-6">
            <div class="column">
                <img class="thumbnail" src="https://placehold.it/300x400">
                <h5>Nulla At Nulla Justo, Eget</h5>
                <p>$400</p>
                <a href="#" class="button small expanded hollow">Buy</a>
            </div>
            <div class="column">
                <img class="thumbnail" src="https://placehold.it/300x400">
                <h5>Nulla At Nulla Justo, Eget</h5>
                <p>$400</p>
                <a href="#" class="button small expanded hollow">Buy</a>
            </div>
            <div class="column">
                <img class="thumbnail" src="https://placehold.it/300x400">
                <h5>Nulla At Nulla Justo, Eget</h5>
                <p>$400</p>
                <a href="#" class="button small expanded hollow">Buy</a>
            </div>
            <div class="column">
                <img class="thumbnail" src="https://placehold.it/300x400">
                <h5>Nulla At Nulla Justo, Eget</h5>
                <p>$400</p>
                <a href="#" class="button small expanded hollow">Buy</a>
            </div>
            <div class="column">
                <img class="thumbnail" src="https://placehold.it/300x400">
                <h5>Nulla At Nulla Justo, Eget</h5>
                <p>$400</p>
                <a href="#" class="button small expanded hollow">Buy</a>
            </div>
            <div class="column">
                <img class="thumbnail" src="https://placehold.it/300x400">
                <h5>Nulla At Nulla Justo, Eget</h5>
                <p>$400</p>
                <a href="#" class="button small expanded hollow">Buy</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="medium-4 columns">
                <h4>Top Products</h4>
                <div class="media-object">
                    <div class="media-object-section">
                        <img class="thumbnail" src="https://placehold.it/100x100">
                    </div>
                    <div class="media-object-section">
                        <h5>Nunc Eu Ullamcorper Orci</h5>
                        <p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>
                    </div>
                </div>
                <div class="media-object">
                    <div class="media-object-section">
                        <img class="thumbnail" src="https://placehold.it/100x100">
                    </div>
                    <div class="media-object-section">
                        <h5>Nunc Eu Ullamcorper Orci</h5>
                        <p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>
                    </div>
                </div>
                <div class="media-object">
                    <div class="media-object-section">
                        <img class="thumbnail" src="https://placehold.it/100x100">
                    </div>
                    <div class="media-object-section">
                        <h5>Nunc Eu Ullamcorper Orci</h5>
                        <p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>
                    </div>
                </div>
            </div>
            <div class="medium-4 columns">
                <h4>Top Products</h4>
                <div class="media-object">
                    <div class="media-object-section">
                        <img class="thumbnail" src="https://placehold.it/100x100">
                    </div>
                    <div class="media-object-section">
                        <h5>Nunc Eu Ullamcorper Orci</h5>
                        <p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>
                    </div>
                </div>
                <div class="media-object">
                    <div class="media-object-section">
                        <img class="thumbnail" src="https://placehold.it/100x100">
                    </div>
                    <div class="media-object-section">
                        <h5>Nunc Eu Ullamcorper Orci</h5>
                        <p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>
                    </div>
                </div>
                <div class="media-object">
                    <div class="media-object-section">
                        <img class="thumbnail" src="https://placehold.it/100x100">
                    </div>
                    <div class="media-object-section">
                        <h5>Nunc Eu Ullamcorper Orci</h5>
                        <p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>
                    </div>
                </div>
            </div>
            <div class="medium-4 columns">
                <h4>Top Products</h4>
                <div class="media-object">
                    <div class="media-object-section">
                        <img class="thumbnail" src="https://placehold.it/100x100">
                    </div>
                    <div class="media-object-section">
                        <h5>Nunc Eu Ullamcorper Orci</h5>
                        <p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>
                    </div>
                </div>
                <div class="media-object">
                    <div class="media-object-section">
                        <img class="thumbnail" src="https://placehold.it/100x100">
                    </div>
                    <div class="media-object-section">
                        <h5>Nunc Eu Ullamcorper Orci</h5>
                        <p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>
                    </div>
                </div>
                <div class="media-object">
                    <div class="media-object-section">
                        <img class="thumbnail" src="https://placehold.it/100x100">
                    </div>
                    <div class="media-object-section">
                        <h5>Nunc Eu Ullamcorper Orci</h5>
                        <p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>
                    </div>
                </div>
            </div>
        </div>
        --!>

@endsection
