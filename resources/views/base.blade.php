<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{config('app.name')}} - @yield('title') </title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    {{-- <title> {{config('app.name')}}  - @yield('title') </title> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body> 
    <div class="container-base">
        <header>
        <div class="banniere"></div>
            <nav class="nav">
                <ul class="nav_ul">
                    <li><a class="nav_a" href="{{route('acceuil.index') }}">Acceuil</a></li>
                    <li><a class="nav_a" href="{{route('abonnements.index') }}">Abonnements</a></li>
                    <li><a class="nav_a" href="{{route('cours.index') }}">Cours</a></li>
                    <li><a class="nav_a" href="{{route('contact.index') }}">Contact</a></li>
                </ul>
            </nav>
        </header>
    @section('content')
    @show   
    <footer>
        <div class="footer_section">
            <ul class="footer_ul">
                <li class="footer_li">Energym</li>
                <li>Copyright 2024</li>
                <li>Tous droits réservés</li>
                <li><a class="footer_li" href="{{route('mentionslegal.index')}}">Mentions légale</a></li>
            </ul>
        </div>
     <div class="footer_section_reseaux">
        <ul class="footer_ul_reseaux">
            <li><a class="footer_li" href="#">Instagram</a></li>
            <li><a class="footer_li" href="#">Facebook</a></li>
            <li><a class="footer_li" href="#">Tiktok</a></li>
        </ul>
     </div>
    </footer> 
    </div>
    {{--    @yield('content') sert d'instruction pour une vue d'enfant --}}
</body>
</html>