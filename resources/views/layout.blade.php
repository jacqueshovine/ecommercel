<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titre')</title>

    {{-- la fonction asset() permet d'appeler des fichiers JS, CSS ou images prenant pour racine le dossier public --}}
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <main>
        @yield('contenu')
    </main>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>


</html>