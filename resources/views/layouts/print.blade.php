<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} - @yield('title') </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <style tyle="text/css">
        @media screen {
            body {
                font-size: 14px;
                font-family: 'Roboto', sans-serif;
                line-height: 1.4;
                background: white;
            }
            h3 {
                font-family: 'Roboto', sans-serif;
            }
        }
    </style>
</head>
<body>
@yield('document')
</body>
</html>
