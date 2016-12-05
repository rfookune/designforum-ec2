<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <link rel='shortcut icon' href='/img/logo/favicon.ico' type='image/x-icon'/ >

    <title>{{ config('app.name', 'Design Forum') }}</title>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <style>

        body {
            font-family: 'Roboto', sans-serif;

            background: #2c3e50; /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #2c3e50 , #3498db);
            background: linear-gradient(to left, #2c3e50 , #3498db);
            
            background: #3a7bd5;
            background: -webkit-linear-gradient(to left, #3a7bd5 , #3a6073);
            background: linear-gradient(to left, #3a7bd5 , #3a6073);
        }

        .header-wrapper {
            padding: 30px;
            background: #fff;
            border: 6px solid #1d107a;
            border-radius: 2px;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        .logo-wrapper {
            margin-bottom: 20px;
        }

        .logo-wrapper img{
            max-height: 150px;
        }
    </style>
</head>
<body>
    <div class="header-wrapper">
        <div class="logo-wrapper">
            <img src="/img/logo/logo.png" alt="">
        </div>
        <div class="content">
            <h2>Coming Soon</h2>
            <p>Please visit back on January 1<sup>st</sup> 2017<p>
        </div>
    </div>
</body>
</html>
