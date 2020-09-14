<!DOCTYPE html class="h-100">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body class="h-100">
    <div id="app" class="h-100">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        
        <b-navbar toggleable="lg" type="dark" variant="info">
            <b-navbar-brand href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </b-navbar-brand>

            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

            <b-collapse id="nav-collapse" is-nav>    

              <!-- Right aligned nav items -->
              @guest
                <b-navbar-nav class="ml-auto" right>            
                    <b-nav-item  href="{{ route('login') }}" variant="success">Login</b-nav-item>
                    <b-nav-item href="{{ route('register') }}">Registrarse</b-nav-item>
                </b-navbar-nav>
              @else
                <b-navbar-nav class="ml-auto" right>            
                    <b-nav-item-dropdown text="{{Auth::user()->name}}" right>

                        <b-dropdown-item @click="logout">
                            Cerrar sesión
                        </b-dropdown-item>     
                                     
                    </b-nav-item-dropdown>        
                </b-navbar-nav>
              @endguest
            </b-collapse>
        </b-navbar>

        <main>
            @yield('content')
        </main>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
