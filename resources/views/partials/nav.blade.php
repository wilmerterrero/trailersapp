 <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
     <div class="container">
         <a class="navbar-brand" href="{{ route('home') }}">
             {{ config('app.name', 'Laravel') }}
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
             <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <!-- Left Side Of Navbar -->
             <ul class="navbar-nav mr-auto">
                 <li class="nav-item">
                     <a href="{{ route('home') }}" class="nav-link">Inicio</a>
                 </li>
                 @role('admin')
                 <li class="nav-item dropdown">
                     <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                         Operaciones
                     </a>

                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="{{ route('admin') }}">
                             Trailers
                         </a>
                     </div>
                 </li>
                 @endrole

                 <!-- Authentication Links -->
                 @guest
                     @if (Route::has('login'))
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
                         </li>
                     @endif

                     @if (Route::has('register'))
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                         </li>
                     @endif
                 </ul>
             @endguest
             </ul>

             <!-- Right Side Of Navbar -->
             <ul class="navbar-nav ml-auto">
                 <div class="form-inline my-2 my-lg-0 flex-1 mx-20">
                     @livewire('trailer-search-bar')
                 </div>
                 @auth
                     <li class="nav-item dropdown ml-4">
                         <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @role('admin')
                                    <i class="fas fa-user-tie"></i> 
                                    @else
                                       <i class="fas fa-user-alt"></i> 
                                @endrole
                         </a>

                         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Cerrar sesión 
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>
                         </div>
                     </li>
                 @endauth
         </div>
     </div>
 </nav>
