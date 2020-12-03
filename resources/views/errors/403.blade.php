<!DOCTYPE html>
<html>

<head>
    <title>Acceso denegado</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:200,400" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            background-color: #343A40;
            display: table;
            font-weight: 200;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 72px;
            margin-bottom: 40px;
            color: rgb(255, 255, 255);
        }

        a {
            font-weight: normal;
            font-size: 50px;
            color: #0052e0;
            text-decoration: none;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <i class="fa fa-ban" style="font-size:120px;color:#FF5959;margin-bottom:30px;"></i>
            <div class="title">Acceso Denegado</div>
            @if (Auth::guest())
                <a href="{{ url('/') }}">Inicio</a> |
                <a href="javascript:history.back()">Volver atras</a>
            @else
                <a href="javascript:history.back()">Volver atras</a>
            @endif
        </div>
    </div>
</body>

</html>
