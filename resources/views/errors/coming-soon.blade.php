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
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.css">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato:100,300,400,500,700,900');

        body {
            background-image: url('/img/test/climbing-1148883.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;

            font-family: 'Lato', sans-serif;
            font-size: 15px;
            font-weight: 300;
            letter-spacing: 0em;
            line-height: 1.6;
            word-spacing: 0.15em;
            color: #636b6f;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /*background: rgba(255,255,255,0.3);*/
        }

        .text-box {
            border: 3px solid #fff;
            margin-top: 180px;
            padding: 7.5px;
            transform: translateY(0px);
            width: 420px;
            max-width: 90%;
        }

        .text-box .body {
            background: #fff;
            padding: 30px 35px;
        }

        .text-box .headline {
            font-weight: 500;
            line-height: 1.1;
            margin-bottom: 20px;
        }

        .text-box .logo img {
            height: 80px;
        }
    </style>

</head>
<body>

    <div class="overlay"></div>

    <div class="text-box center-block text-center">
        <div class="body">
            <div class="logo">
                <img src="/img/logo/logo.png" alt="Design Forum">
            </div>
           <div class="headline">
               <h2>Coming Soon!</h2>
           </div>
           <div class="content">
               <p>Our website is in the final stage of development. Please check back on January 1<sup>st</sup> 2017 to see it live.</p>
           </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</body>
</html>
