<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('form09/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ url('form09/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('form09/css/bootstrap.min.css') }}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ url('form09/css/style.css') }}">

    <title>@yield('title')</title>
    <style>
        .telegram{
            background:#039be5;
        }		

        .telegram:hover {
          background: #0289cb;
        }		
    </style>	
  </head>
  <body>

    @yield('content')
    
    <script src="form09/js/jquery-3.3.1.min.js"></script>
    <script src="form09/js/popper.min.js"></script>
    <script src="form09/js/bootstrap.min.js"></script>
    <script src="form09/js/main.js"></script>
  </body>
</html>  