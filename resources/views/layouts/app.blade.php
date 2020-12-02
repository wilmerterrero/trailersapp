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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('video-js/dist/video.min.js') }}"></script>
    <script src="{{ asset('videojs-youtube/dist/Youtube.min.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- DataTable -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />

    <!-- VideoJS -->
    <link rel="stylesheet" href={{ asset('video-js/dist/video-js.min.css') }} />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">

        <header>
            @include('partials.nav')
        </header>

        <main class="py-4">
            @yield('content')
        </main>

    </div>

    <script type="text/javascript" src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" defer></script>
    <script>
        $(document).ready(function() {
            $('#trailers').DataTable();
        });

    </script>
</body>

</html>
