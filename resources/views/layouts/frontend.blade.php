<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel='shortcut icon' href='/img/logo/favicon.ico' type='image/x-icon'/ >

    <title>{{ config('app.name', 'Design Forum') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/1.7.22/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/flaticon.css">
    <link href="/css/frontend.css" rel="stylesheet">
    <style>

        .content--split-2 .img-wrapper {
            text-align: center;
            margin-top: 30px;
        }

        .content--split-2 .img-wrapper .flaticon {
            font-size: 10em;
        }

        .content--split-2 .img-wrapper img {
            /*max-height: 250px;*/
            display: block;
            position: absolute;
            z-index: 1;
            max-width: 90%;
        }

        .text-wrapper .text-header {
            padding-bottom: 30px;
        }

        .text-wrapper .text-header .title {
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            font-size: 1.7em;
        }

        .text-wrapper .text-header .title2 {
            text-transform: uppercase;
            font-size: 0.9em;
        }

        .content--split-2 .sec--btn-group {
            margin-top: 35px;
        }

        .content--split-2 .sec--btn-group .btn:first-of-type {
            margin-right: 15px;
        }

        .content--split-2 .text-wrapper {
            padding: 10px 25px;
        }

        .content--split-2 .img-wrapper-full {
            margin-top: 50px;
            text-align: center;
        }

        .content--split-2 .img-wrapper-full img {
            position: relative;
            max-width: 90%;
            max-height: 350px;
        }
    </style>
    @yield('styles')

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    
    <div class="main-content">

        @include('frontend.partials.navbar')
        @include('frontend.partials.sidebar')
        
        @yield('header')
        
        @yield('content')
        
        @include('frontend.partials.footer')

        <a href="#" id="to--top" class="to--top"><span class="mdi mdi-chevron-up"></span></a>

    </div>

    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-smooth-scroll/2.0.0/jquery.smooth-scroll.min.js"></script>
    <script src=//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/parallax.js/1.4.2/parallax.min.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/css3-animate-it/1.0.3/js/css3-animate-it.min.js"></script> -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/wow/1.0.0/wow.min.js"></script>
    <script src="/js/frontend.js"></script>

    @yield('scripts')
</body>
</html>
