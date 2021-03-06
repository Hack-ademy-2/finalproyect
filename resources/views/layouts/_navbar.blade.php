<nav class="navbar navbar-expand-lg primary-color sticky-top d-flex py-2 scrollnav" id="navBar">
    <a class="navbar-brand text-white d-none d-sm-block pt-2 pb-0" href="{{route('home')}}">AulaPOP</a>
    <a href="{{route('home')}}"></a><i class="fas fa-cloud-upload-alt mr-auto" id="iconocolores"></i></a>
    <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon mb-2"><i class="far fa-caret-square-down"></i></span>
  </button>
    <div>
    </div>
    <div class="collapse navbar-collapse align-content-center justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item dropdown text-white" style="z-index: 1">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>{{ __('ui.categorias') }}</a>
                <div class="dropdown-menu dropdown-menu-right text-white bgc-secundario" style="border-style: none;" aria-labelledby="navbarDropdown">
                    @foreach($categories as $category)
                    @include('announcement._categorynav')
                    @endforeach
                </div>
            </li>
            <li class="nav-item dropdown" style="z-index: 1">
                <div class="nav-link dropdown-toggle text-white mr-4" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ __('ui.productos') }}
                </div>
                <div class="dropdown-menu dropdown-menu-right bgc-secundario" style="z-index: 1; border-style: none;" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-white" href="{{route('announcement.create')}}">{{ __('ui.subir') }}</a>
                </div>
            </li>
                @guest
                @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('login')}}">{{ __('ui.inicia') }}<!-- {{ __('Login') }} --></a>
            </li>
            @endif



            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('register')}}">{{ __('ui.registro') }}<!-- {{ __('Register') }} --></a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: #ffc107" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right bgc-secundario" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                        {{ __('ui.salir') }}<!-- {{ __('Logout') }} -->
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            @if (Auth::user()->is_admin)
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('admin.home') }}">
                Admin
                    <span class="badge badge-pill badge-info">
                        {{\App\Models\RequestRevisor::ToBeRevisionedCount() }}
                    </span>
                </a>
            </li>
                    
            @endif
            @if (Auth::user()->is_revisor)
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('revisor.home') }}">
                {{ __('ui.revisor') }}
                    <span class="badge badge-pill badge-warning">
                        {{\App\Models\Announcement::ToBeRevisionedCount() }}
                    </span>
                </a>
            </li>
                    
            @endif
            @endguest
        </ul>
    </div>
</nav>
