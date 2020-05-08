<!DOCTYPE html>
<html lang=" {{ app()->getLocale() }} ">
<head>

<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ config("app.name") }}</title>

        <meta name="keywords" content="desarrollo, web, informatica, servicio tecnico" />
        <meta name="description" content="desarrollo, web, informatica, servicio tecnico" />
        <meta name="author" content="Mars Informatica" />




        <!-- Favicon-->
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset("img/favicon") }}/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset("img/favicon") }}/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset("img/favicon") }}/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset("img/favicon") }}/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset("img/favicon") }}/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset("img/favicon") }}/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset("img/favicon") }}/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset("img/favicon") }}/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("img/favicon") }}/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset("img/favicon") }}/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset("img/favicon") }}/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset("img/favicon") }}/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("img/favicon") }}/favicon-16x16.png">
        <link rel="manifest" href="{{ asset("img/favicon") }}/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset("img/favicon") }}/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">


        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        @yield("head_page")



    
    
</head>



<body>
    <div class="body"> 

        @include("front.includes.header")
        @include("front.includes.navigation")
        @include("front.includes.about")
        @include("front.includes.services")
        @include("front.includes.portfolio")
        @include("front.includes.call")
        @include("front.includes.contact")
        @include("front.includes.footer")

        @yield('content')
    
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>


</body>
</html>