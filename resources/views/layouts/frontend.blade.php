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
    <link rel="stylesheet" href="/css/flaticon.css">
    <link href="/css/frontend.css" rel="stylesheet">
    <style>
        .content--split-2 .img-wrapper {
            text-align: center;
        }

        .content--split-2 .img-wrapper .flaticon {
            font-size: 10em;
        }

        .content--split-2 .img-wrapper img {
            max-height: 250px;
        }

        .content--split-2 .text-wrapper .title {
            font-weight: 700;
        }

        .content--split-2 .text-wrapper {
            padding: 10px 25px;
            line-height: 1.7;
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
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-smooth-scroll/2.0.0/jquery.smooth-scroll.min.js"></script>
    <script src=//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js></script>
    <script src="/js/frontend.js"></script>

    @yield('scripts')
</body>
</html>
