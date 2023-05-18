<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style2.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <link rel="icon" href="favicon.ico">
  </head>
    <body class="bg-dark bg ">
        <!--navigasi-->
        @include('layouts.sidebar')
       
         <div class="container mt-4">
            @yield('container')
         </div>
        

    </body>


</html>