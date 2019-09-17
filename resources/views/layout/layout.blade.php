<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        {{-- <link rel="stylesheet" href="/css/app.css" type="text/css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"> --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        
    </head>
    <body>
       
        @yield('content')
                <script src="{{ asset('js/app.js') }}"></script>
        
    <script type="text/javascript"  src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript"  src="bootstrap/js/popper.min.js"></script>
    <script type="text/javascript"  src="bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="/js/app.js" ></script>
    </body>
</html>
