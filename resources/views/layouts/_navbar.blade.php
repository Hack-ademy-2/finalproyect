<nav class="navbar navbar-expand-lg primary-color sticky-top">
    <a class="navbar-brand text-white" href="{{route('home')}}">AulaPOP</a>
    <a href=""><i class="fas fa-cloud-upload-alt"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse align-content-center justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Categories</a>
                <div class="dropdown-menu dropdown-menu-right text-white" aria-labelledby="navbarDropdown">
                    @foreach($categories as $category)
                        @include('announcement._announcement')
                    @endforeach
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white mr-4" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Productos
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('announcement.create')}}">Subir</a>
                    <a class="dropdown-item" href="{{route('home')}}">Comprar</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Ver mis publicaciones</a>
                </div>

                @guest
                @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('login')}}">{{ __('Login') }}</a>
            </li>
            @endif

            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('register')}}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </div>
</nav>
