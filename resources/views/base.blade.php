<!DOCTYPE html>
<html lang="{{ config ('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name')}} @yield('page_title')</title>
    @section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @show
</head>
<body>
    <header>
        <nav>
            <ul>
            <li><a href="{{ route('accueil')}}">Accueil</a></li>
            <li><a href="{{ route('cours')}}">Cours</a></li>
            <li><a href="{{ route('contact')}}">Contact</a></li>
            <li><a href="{{ route('tarifs')}}">Tarifs</a></li>
            </ul>
        </nav>
    </header>
    <h1> Basic Frite </h1>
    @section('content')
    @show
    <footer>
            <ul>
                <li>Copyright Basic Frite, 2022</li>
                <li>//</li>
                <li><a href="{{ route('contact')}}">Contact</a></li>
                <li>//</li>
                <li><a href="{{ route('mentions_legales')}}">Mentions Légales</a></li>

            </ul>
    </footer>
</body>
</html>