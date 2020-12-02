<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- Scripts --}}
  <script src="{{asset('js/app.js')}}"></script>


    {{-- Styles --}}
  <link rel="stylesheet" href="{{asset('css/app.css')}}">


    <title>Mi wallapop</title>
  </head>
  <body>
    @include('layouts.nav')
    @yield('content')

  </body>
</html>