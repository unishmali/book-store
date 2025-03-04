<html>
    <head>
      <title>BookLand</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('icons/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('icons/fontawesome/css/all.min.css') }}"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('icons/themify/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/nouislider/nouislider.min.css') }}">


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    </head>
    <body>
    @include('layouts.header')
    @yield('content')
 
    @include('layouts.footer')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script><!-- BOOTSTRAP MIN JS -->
    <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script><!-- BOOTSTRAP SELECT MIN JS -->
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script><!-- SWIPER JS -->
    <script src="{{ asset('vendor/countdown/counter.js') }}"></script><!-- COUNTER JS -->
    <script src="{{ asset('vendor/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
    <script src="{{ asset('vendor/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
    <script src="{{ asset('vendor/wnumb/wNumb.js') }}"></script><!-- WNUMB -->
    <script src="{{ asset('vendor/nouislider/nouislider.min.js') }}"></script><!-- NOUISLIDER MIN JS -->
    <script src="{{ asset('js/dz.carousel.js') }}"></script><!-- DZ CAROUSEL JS -->
    <script src="{{ asset('js/dz.ajax.js') }}"></script><!-- AJAX -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/live-search.js') }}"></script>
    
    
   </body>
</html>