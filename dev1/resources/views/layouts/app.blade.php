<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ filemtime(public_path('css/app.css')) }}" type="text/css">
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <header class="navbar navbar-dark fixed-top bg-dark">
            <div class="container">
                <a href="{{ route('cinema.index') }}">CINEMAS</a>
                <a href="{{ route('artiste.index') }}">ARTISTES</a>
                <a href="{{ route('film.index') }}">FILMS</a>
                <a href="{{ route('salle.index') }}">SALLES</a>
                <a href="{{ route('seance.index') }}">SEANCES</a>
                <a href="{{ route('login') }}">LOGIN</a>
                <a href="{{ route('register') }}">REGISTER</a>
              
                    <button method="POST" action="{{ route('logout') }}" class="btn btn-primary" type="submit">LOGOUT</button>

            </div> 
        </header>
        <div class="container">
            @yield('content')
        </div>
        
        @if (session('ok'))
        <div class="container">
            <div class="alert alert-dismissible success fade show" role="alert">
                {{ session('ok') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @endif
        
        <script src="{{ asset('js/app.js') }}?v={{ filemtime(public_path('js/app.js')) }}"></script>
    </body>
</html>