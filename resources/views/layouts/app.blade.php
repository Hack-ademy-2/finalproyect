<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    {{-- Scripts --}}
    <script src="{{asset('js/app.js')}}"></script>


    {{-- Styles --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


    <title>Mi AulaPOP</title>
</head>

<body>
    @include('layouts._navbar')

    <div class="container">
        <div class="row">
            @if(session('access.denied.revisor.only'))
            <div class="col-12 alert alert-danger mt-3 text-center">{{session('access.denied.revisor.only')}}</div>
            @endif
        </div>
        <div class="row">
            @include('layouts.buttons')

            @yield('content')
        </div>
    </div>
    <!-- Footer -->
<footer class="page-footer font-small primary-color pt-4">

    <!-- Footer Elements -->
    <div class="container">
  
      <!-- Social buttons -->
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a class="btn-floating btn-fb mx-1">
            <i class="fab fa-facebook-f"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-tw mx-1">
            <i class="fab fa-twitter"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-gplus mx-1">
            <i class="fab fa-google-plus-g"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-li mx-1">
            <i class="fab fa-linkedin-in"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-dribbble mx-1">
            <i class="fab fa-dribbble"> </i>
          </a>
        </li>
      </ul>
      <!-- Social buttons -->
  
    </div>
    <!-- Footer Elements -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center text-white py-3">© 2020 Copyright:
      <a class="text-white" href="#"> aulapop.com</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->

</body>

</html>
