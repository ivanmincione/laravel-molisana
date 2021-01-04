<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        {{-- GOOGLE FONTS --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <!-- FONTAWESOME -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        {{-- STYLE --}}
        <link rel="stylesheet" href= {{ asset("css/app.css") }}>
        <title>@yield("page-title", "La Molisana")</title>
    </head>
    <body>
        {{-- includo il file della struttura dell'header --}}
        @include("partials.header")

        {{-- creo un timbro per il contenuto del main della home --}}
        <main>
            @yield("content")
        </main>

        {{-- includo il file per della struttura del footer --}}
        @include("partials.footer")


        <script src={{ asset("js/app.js")}} charset="utf-8"></script>
    </body>
</html>
