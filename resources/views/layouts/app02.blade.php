<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

     <!-- Styles -->
    <!-- Font Awesome CSS-->

   <!--  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" /> -->
    
    <link rel="stylesheet" href="{{ asset('template-dark/lib/%40fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template-dark/lib/ionicons/css/ionicons.min.css') }}">
    
    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('template-dark/css/bracket.css') }}">
    <link rel="stylesheet" href="{{ asset('template-dark/css/bracket.dark.css') }}">


    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
  
    <link rel="stylesheet" href="{{ asset('css/style.default.css') }}" id="theme-stylesheet"> -->

    <!-- Scripts -->
   <!--  <script type="text/javascript" src="{{ asset('js/app.js') }}"></script> -->

    <style type="text/css">
  
      .py-4 {
            padding-bottom: 0!important;
            padding-top: 0!important;
        }

    </style>

</head>

<body>

    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>

    </div>

</body>

</html>
