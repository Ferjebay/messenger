<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <div id="app">

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
                <b-nav-item-dropdown text="UserName" right>
                    <b-dropdown-item href="#">Cerrar sesión</b-dropdown-item>                    
                </b-nav-item-dropdown>        
            </b-navbar-nav>
          @endguest
        </b-collapse>
      </b-navbar>

    <main class="py-4">
        @yield('content')
    </main>        

    </div>
</body>
</html>
