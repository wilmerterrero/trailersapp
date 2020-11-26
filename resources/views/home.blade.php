<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TrailersApp</title>
</head>
<body>
    <h1>Hello World</h1>
    @foreach ($trailers as $trailer)
        <ul>
            <li>
                {{ $trailer['nombre'] }}
            </li>
        </ul>
    @endforeach
</body>
</html>