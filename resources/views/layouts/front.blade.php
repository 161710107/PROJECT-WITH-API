<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Hello World!</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="front/css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="front/css/fontawesome-all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="front/css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="front/style1.css">
</head>

<body>
        @include('partial.header')



    <!-- .hero-content -->

      @yield('content')

 @include('partial.sitefooter')

    <script type='text/javascript' src='front/js/jquery.js'></script>
    <script type='text/javascript' src='front/js/masonry.pkgd.min.js'></script>
    <script type='text/javascript' src='front/js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='front/js/swiper.min.js'></script>
    <script type='text/javascript' src='front/js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='front/js/circle-progress.min.js'></script>
    <script type='text/javascript' src='front/js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='front/js/custom.js'></script>
    @yield('scripts')
</body>
</html>
