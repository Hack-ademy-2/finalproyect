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
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">


    <title>Mi AulaPOP</title>
</head>

<body>
    @include('layouts._navbar')
    <div class="container-fluid masthead">           
                @include('layouts.buttons')
                @yield('content')
    </div>
    <div class="container-fluid main-content">
        <div class="row">
            @if(session('access.denied.revisor.only'))
            <div class="col-12 alert alert-danger mt-3 text-center">{{session('access.denied.revisor.only')}}</div>
            @endif
        </div>
        <div>
        <h1 class="col-12 text-center text-white mt-5 pt-3 mb-0">{{__('ui.tituloultimas')}}</h class="text-center">
        </div>
            @include('announcementcontent')
    </div>

    @include('layouts.footer')

    <div class="btn box-botones">
        <a href="{{url()->previous()}}" class="btn btn-warning mb-2" style="width:53px;"><i
                class="fas fa-arrow-circle-left"></i></a>
        <a href="{{route('home')}}" class="btn btn-light mb-1" style="width:53px;"><i class="fas fa-home"></i></a>
    </div>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v9.0" nonce="mJdeZb66"></script>
<script>let iconogiro = document.querySelector ("#giratorio")

document.addEventListener('scroll',() => {
    
    var scrolling = window.pageYOffset 
    
    iconogiro.style.transform=`rotate(${scrolling/5}deg)`
    })
    
    let iconocolor = document.querySelector("#iconocolores")

        window.addEventListener('scroll', () => {
            if (window.pageYOffset>0) {
                iconocolor.style.color = "#ffc107"}
            else {
                iconocolor.style.color = "#ffffff"}
        })

</script>
</body>

</html>
