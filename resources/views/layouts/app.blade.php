<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
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
    </body>
</html>
