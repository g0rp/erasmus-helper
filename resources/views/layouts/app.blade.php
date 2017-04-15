<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <div class="navbar-fixed blue lighten-4">
            <nav class=" blue lighten-2">
                <div class="container">
                    <div class="nav-wrapper">
                        <a class="brand-logo" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li>{{ HTML::linkAction('YearsController@index', 'Années') }}</li>
                            <li>{{ HTML::linkAction('PartnersController@index', 'Partenaires') }}</li>
                            <li>{{ HTML::linkAction('StudentsController@index', 'Etudiants') }}</li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/js/materialize.min.js"></script>
    <script type="text/javascript" src="/js/script.js"></script>
</body>
</html>
