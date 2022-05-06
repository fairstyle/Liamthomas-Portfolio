<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Liam Thomas - Pronto llegare a este mundo!"/>
        <meta name="keywords" content="Bebe, Portfolio, Padres, Mama, Papa, Baby Shower, Sin nacer, Aun no nace, Nuevo en el Mundo, Nueva Vida"/>
        <meta name="author" content="Andres Villarroel"/>
        <meta name="copyright" content="Se prohíbe la publicación, la venta o la copia de esta pagina"/>
        <meta name="robots" content="index"/>

        <!-- Redes sociales TAGS -->
        <meta property="og:title" content="Liam Thomas"/>
        <meta property="og:type" content="Portafolio de un bebe y sus padres"/>
        <meta property="og:url" content="https://liamthomas.cl"/>
        <meta property="og:image" content="{{ asset('images/xd2.png') }}"/>
        <meta property="og:description" content="Liam Thomas - Pronto llegare a este mundo!"/>

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnxAguEBk3U2Bvm9KNFF5DopusUeSSzhA&callback=initMap"></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
