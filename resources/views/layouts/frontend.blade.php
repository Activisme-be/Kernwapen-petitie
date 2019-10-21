<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title }} | {{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app" class="content">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            &nbsp;
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">
                                        <i class="fe fe-log-in mr-1"></i> {{ __('Aanmelden') }}
                                    </a>
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <i class="fe fe-user mr-1"></i> {{ $currentUser->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Afmelden') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <main role="main">
                @yield('content')
            </main>
        </div>
        <footer id="myFooter">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-sm-3 text-left myCols">
                        <h5>V.U</h5>
                        Activisme_BE<br/>
                        Zonnebeekseweg 343<br/>
                        8900 Ieper, België<br/>
                        00/000.00.00<br/>
                    </div>
                    <div class="col-sm-3 text-left myCols">
                        <h5>Nuttige links</h5>
                        <ul>
                            @guest
                                <li><a href="{{ route('login') }}">Aanmelden</a></li>
                            @else
                                <li><a href="{{ route('home') }}">Backend</a></li>
                            @endif

                            <li><a href="">Onze visie</a></li>
                            <li><a href="">Ondersteun ons</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 text-left myCols">
                        <h5>Ondersteund</h5>
                        <ul>
                            <li><a href="http://www.icanw.org/">ICAN</a></li>
                            <li><a href="https://vrede.be/">Vrede VZW</a></li>
                            <li><a href="https://nonukes.be/">Belgische Coalitie Kernwapens</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 text-left myCols">
                        <h5>Voorwaarden</h5>
                        <ul>
                            <li><a href="">Algemene voorwaarden</a></li>
                            <li><a href="">Privacy beleid</a></li>
                        </ul>

                        <h5>Contact</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="https://www.facebook.com/ActivismeBE/"><i class="fe social-facebook fe-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/Activisme_be"><i class="fe social-twitter fe-twitter"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="fe social-mail fe-mail"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-copyright">
                <div class="container">
                    <p class="ml-0 text-left">&copy; {{ date('Y') }} {{ config('app.name') }} - Alle rechten voorbehouden</p>
                </div>
            </div>
        </footer>
    </body>
</html>
