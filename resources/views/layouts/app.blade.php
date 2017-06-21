<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Naam Website -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{-- {{ HTML::image('img/placeholder.jpg') }} --}}
                        {{ config('PhoteFrameOnline', 'PhotoFrameOnline') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Inloggen</a></li>
                            {{-- <li><a href="{{ route('register') }}">Registreren</a></li> --}}
                        @else
                            <li>
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
            <div class="container">
                <div class="navbar-header">
                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav list-inline master-navbar">
                            <li><a href="/home">Home</a></li>
                            <li>
                                <div class="form-group">
                                    <form action="/home" method="POST" class="form">
                                        <input id="searchbar" value="Zoeken..." class="form-control"></input>
                                    </form>
                                </div>
                            </li>
                            {{-- Create --}}
                            <li><a class="btn pull-right" data-toggle="modal" data-target="#newgame" onclick="
                                document.getElementById('titlenew').textContent='Voeg Categorie Toe';
                                document.getElementById('btnnew').textContent='Voeg Categorie Toe';
                                document.getElementById('newform').action='crud/edit/-1';
                                " role="button">New Game</a></li>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <li><h5>Aantal Bezoekers : 0</h5></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
    @include('crud/create')
    @include('crud/edit')
    @include('crud/delete')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="js/bootstrap.min.js"></script> --}}
    <script src="js/jquery-3.2.1.js"></script>
</body>
</html>
