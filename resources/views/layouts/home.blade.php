<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('video-js/dist/video.min.js') }}"></script>
    <script src="{{ asset('videojs-youtube/dist/Youtube.min.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- VideoJS -->
    <link rel="stylesheet" href={{ asset('video-js/dist/video-js.min.css') }} />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">

        <header>
            @include('partials.nav')
        </header>

        <main class="py-2">

            <section class="m-5">
                @include('partials.carousel')
            </section>

            <div class="trailer-container">
                @yield('content')
            </div>

            <section class="section-trailer">
                @yield('trailer')
            </section>

        </main>

    </div>

    <footer class="site-footer">
        <div class="container-footer">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="container-footer">
                        <div class="row">
                            <div class="col-md-8 col-sm-6 col-xs-12">
                                <p class="copyright-text">Copyright &copy; 2019-8127 All Rights Reserved by
                                    <a href="#">Wilmer Terrero & Naomi Céspedes</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                    <p class="text-justify"> <br> Todos los contenidos de este Sitio (Incluyendo, pero no limitado a, texto, logotipos, contenido, fotografías, audio, botones, nombres comerciales y vídeo) están sujetos a derechos de propiedad por las leyes de Derechos de autor.
                    </p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <ul class="social-icons">
                        <br><br><br>
                        <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="github" href="#"><i class="fab fa-github"></i></a></li>
                        <li><a class="youtube" href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>

                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Mas Informacion</h6>
                    <ul class="footer-links">
                        <li><a href="mailto:20198127@itla.edu.do">About Us</a></li>
                        <li><a href="mailto:20198127@itla.edu.do">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
    </footer>
</body>

</html>
