
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>So Milano</title>
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>
<body>

<div class="top-bar">
    <div class="top-bar-left">
        <ul class="menu">
            <!--<li><a href="{{route('contact')}}">Contactez-nous</a></li>
            <li><a href="{{route('login')}}">Se Connecter</a></li>-->
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="menu">
            <li><a href="{{route('accueil')}}">Accueil</a> </li>
            <li><a href="{{route('vet')}}">Vêtements</a></li>
            <li><a href="{{route('nouv')}}">Nouveautés</a></li>
            <li><a href="{{route('chaus')}}">Chaussures</a></li>

        </ul>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto" style="list-style-type: none; display: flex;">
            @guest
                <li class="nav-item" style="margin-right: 1em;"><a class="nav-link" href="{{ route('login') }}">@lang('Connexion')</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">@lang('Inscription')</a></li>
                <li><div style="margin-left: 1em;"><a href="{{route('panier')}}">Panier</a></div></li>
            @else
                <li class="nav-item">
                    <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" id="logout" class="nav-link" href="{{ route('logout') }}">@lang('Déconnexion')</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide">
                        {{ csrf_field() }}
                    </form>
                </li>
            @endguest
        </ul>
    </div>
</div>

@yield('content')

<div class="callout large secondary">
    <div class="row">
        <div class="large-4 columns">
            <h5><strong>Nous trouver</strong></h5>
            <p>Appeler 07 68 86 52 15</p>
            <p>sophia@somilano.fr
                http://somilano.fr</p>
        </div>
        <div class="large-3 large-offset-2 columns">
            <ul class="menu vertical">

        </div>
        <div class="large-3 columns">
            <ul class="menu vertical">
                <li></li>

            </ul>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
