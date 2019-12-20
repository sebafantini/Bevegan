<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    
                    <img class="imagen-NavBar" src="img/logoBevegan.jpg" alt="">
                    
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item active">
                            <a class="nav-link font-weight-bold" href="{{'/productos'}}">Productos<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link font-weight-bold" href="{{'/contacto'}}">Contacto</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link font-weight-bold" href="{{'/ayuda'}}">Ayuda</a>
                        </li>



                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarme') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item active">
                                
                                <a class='nav-link' href={{'cart'}}>  <i class=""><img src="{{asset('/img/carrito.jpeg')}}" alt=""></i></a>
                            </li>
                                
                            @if (Auth::User()->role == 7)
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdownAdministrar" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        Administrar Tablas<span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">                                    
                                        <a class="dropdown-item" href="{{'/categoriaListado'}}">Categorias</a>
                                        <a class="dropdown-item" href="{{'/marcaListado'}}">Marcas</a>
                                        <a class="dropdown-item" href="{{'/productoListado'}}">Productos</a>
                                    </div>                                
                                </li>                                
                            @endif

                            
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{'/perfil'}}">Perfil</a>
                                    <a class="dropdown-item" href="{{'/historia'}}">Compras</a>
                                    
                                    
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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

        <main class="py-4">
            @yield('content')
        </main>


        <div class="mt-5 pt-5 pb-5 footer">
            <div class="container">
              <div class="row">
                <div class="col-lg-5 col-xs-12 about-company">
                  <h2>BeVegan</h2>
                  <p class="pr-5 text-white-50">Somos tu tienda on-line de productos saludables.
          Nuestra misión es ofrecerte los mejores productos del mercado, en un solo lugar, para que comas rico y sano. </p>
                  <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
                </div>
                <div class="col-lg-3 col-xs-12 links">
                  <h4 class="mt-lg-0 mt-sm-3">Links</h4>
                    <ul class="m-0 p-0">
                      <li>- <a class="text-white-50" href="#">Consejo Nacional de Nutrición</a></li>
                      <li>- <a class="text-white-50" href="#">ONG Vida Silvestre</a></li>
                      <li>- <a class="text-white-50" href="#">INTA</a></li>
                      <li>- <a class="text-white-50" href="#">Fundación Agricultura Familiar</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-xs-12 location">
                  <h4 class="mt-lg-0 mt-sm-4">¿Dónde estamos?</h4>
                  <p>Av. Monroe 860, CABA</p>
                  <p class="mb-0"><i class="fa fa-phone mr-3"></i>(54 11) 4754-3010</p>
                  <p><i class="fa fa-envelope-o mr-3"></i>info@bevegan.com</p>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col copyright">
                  <p class=""><small class="text-white-50">© 2019. All Rights Reserved.</small></p>
                </div>
              </div>
            </div>
            </div>


    </div>
</body>
</html>
