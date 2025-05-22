<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<nav class="bg-light py-2">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link fw-bold" href="/">Welcome</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fw-bold" href="/projects">Projects</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fw-bold" href="/recetteV2">RecetteV2</a>
        </li>
    </ul>
</nav>


    {{--Voir le type de la varible --}}
    {{--@dump($slot)--}}
    {{--Affichage de la variable --}}
    {{$slot}}
</body>
</html>
