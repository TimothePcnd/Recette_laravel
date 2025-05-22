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
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
        <a class="navbar-brand mx-auto text-uppercase" href="/">Les recettes de la mama</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCentered" aria-controls="navbarCentered" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarCentered">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Welcome</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/recetteV2">RecetteV2</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
{{--<ul>
    <li><a href="/">Welcome</a></li>
    <li><a href="/projects">Projects</a></li>
    <li><a href="/recetteV2">RecetteV2</a> </li>
</ul>--}}
    {{--Voir le type de la varible --}}
    {{--@dump($slot)--}}
    {{--Affichage de la variable --}}
    {{$slot}}
</body>
</html>
