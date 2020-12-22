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
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">


    <title>Mi AulaPOP</title>
</head>

<body>
    @include('layouts.buttons')
    @include('layouts._navbar')
    <div class="container-fluid main-content2 px-0">
        @yield('content')
    </div>
    
    @include('layouts.footer')

    <div class="btn box-botones">
        <a href="{{url()->previous()}}" class="btn btn-warning mb-2" style="width:53px;"><i
                class="fas fa-arrow-circle-left"></i></a>
        <a href="{{route('home')}}" class="btn btn-light mb-1" style="width:53px;"><i class="fas fa-home"></i></a>
    </div>

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v9.0"
        nonce="mJdeZb66"></script>
    <script>
        let iconogiro = document.querySelector("#giratorio")

        document.addEventListener('scroll', () => {

            var scrolling = window.pageYOffset

            iconogiro.style.transform = `rotate(${scrolling/3}deg)`
        })

        let iconocolor = document.querySelector("#iconocolores")

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 0) {
                iconocolor.style.color = "#ffc107"
            } else {
                iconocolor.style.color = "#ffffff"
            }
        })

    </script>
</body>

</html>
