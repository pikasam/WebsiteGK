{{-- Start file --}}
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

{{-- Header van file --}}
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Cross-Site Request Forgery(CSRF) Token --}}
    {{-- Uitleg : https://stackoverflow.com/questions/5207160/what-is-a-csrf-token-what-is-its-importance-and-how-does-it-work --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Text dat boven de webbrowser staat (in het tabblad zelf) --}}
    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- .CSS files --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- Scripts nodig voor functies --}}
    <script src="js/jquery-3.2.1.js"></script>
</head>

{{-- Body file --}}
<body>
    <div id="app">

        {{-- Begin Navbar --}}
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">

                {{-- Navbar Header --}}
                <div class="navbar-header">

                    {{-- Responsive gedeelte van de nav bar wanneer de weergave van de pagina te klein word. --}}
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    {{-- Linker kant van de navbar header --}}
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{-- {{ HTML::image('img/placeholder.jpg') }} --}}
                        {{-- Stuk text (links boven) --}}
                        {{ config('PhoteFrameOnline', 'PhotoFrameOnline') }}
                    </a>
                </div>

                {{-- Main navbar, met responsive classes --}}
                <div class="collapse navbar-collapse" id="app-navbar-collapse">

                    {{-- Linker kant navbar --}}
                    <ul class="nav navbar-nav">

                        {{-- staat voor No-break space --}}
                        {{-- Uitleg : https://pc.net/helpcenter/answers/no_break_space_html --}}
                        &nbsp;
                    </ul>

                    {{-- Rechter kant navbar --}}
                    <ul class="nav navbar-nav navbar-right">
                        
                        {{-- Authenticatie links login en register --}}
                        {{-- if (user::gast) tip:go to definition op guest --}}
                        {{-- checkt of de gebruiker een gast(voor het eerst) is --}}
                        @if (Auth::guest())

                            {{-- Link naar login.blade.php --}}
                            <li><a href="{{ route('login') }}">Inloggen</a></li>
                            {{-- <li><a href="{{ route('register') }}">Registreren</a></li> --}}
                        @else
                            <li>

                                {{-- Linkt naar logout functie --}}
                                {{-- Je hebt hier geen view van maar er is een route gemaakt door Auth::routes() --}}
                                {{-- Deze Route brengt je naar een functie die het uitloggen verhelpt --}}
                                {{-- Tip : go to definition op logout --}}
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Uitloggen
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>

            {{-- 2de laag navbar --}}
            <div class="container">

                {{-- Navbar Header --}}
                <div class="navbar-header">

                    {{-- 2de laag navbar, met responsive classes --}}
                    <div class="collapse navbar-collapse" id="app-navbar-collapse">

                        {{-- Linkerkant Navbar --}}
                        <ul class="nav navbar-nav list-inline master-navbar">
                            
                            {{-- Homeknop met searchbar --}}
                            <li><a href="/home">Home</a></li>
                            <li>
                                <div class="form-group">
                                    <form action="/home" method="POST" class="form">
                                        <input id="searchbar" value="Zoeken..." class="form-control"></input>
                                    </form>
                                </div>
                            </li>

                            {{-- Create --}}
                            <li><a class="btn pull-right" data-toggle="modal" data-target="#create" role="button">Nieuwe Categorie</a></li>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">

                            {{-- Aantal bezoekers --}}
                            <li><h5>Aantal Bezoekers : 0</h5></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        {{-- Hier maak je een vak 'content', dit vak kan je open zetten als @section in andere .blade.php file om daar data neer te zetten die dan hier terecht komen, als je die .blade.php opvraagt --}}
        @yield('content')
    </div>

    {{-- Hier vraag je de .blade.php files op, door @include te gebruiken komt eigenlijk letterlijk te code die je include hier te staan. --}}
    {{-- Alleen zie je dit dus inplaats van de lijst met code. --}}
    @include('crud/create')
    @include('crud/edit')
    @include('crud/delete')

    <!-- Overige Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
