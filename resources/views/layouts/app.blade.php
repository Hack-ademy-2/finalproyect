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
   
   @include('layouts.footer')
   <div class="btn box-botones">
    <a href="{{url()->previous()}}" class="btn btn-warning mb-2" style="width:53px;"><i class="fas fa-arrow-circle-left"></i></a>
    <a href="{{route('home')}}" class="btn btn-light mb-2" style="width:53px;"><i class="fas fa-home"></i></a>
</div>

</body>

</html>
