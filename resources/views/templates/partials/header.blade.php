<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href=""><!-- Agregar icono de la app -->
    <!-- Agrego JQuery 3.3 -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <!-- Agrego Bootstrap 4.1 -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Agrego hoja de estilos personal -->
    <link rel="stylesheet" href="{{ asset('css/personal-css.css') }}">
    <!-- Agrego Font Awesom 5.1-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!-- Agrego el titilo de la pagina que estoy viendo -->
    <title> @yield('title', 'Default') | Ak-demia</title>
    {{ Html::script('js/app.js') }}
    {{ Html::script('js/jquery.mask.min.js') }}

    
</head>

<body>