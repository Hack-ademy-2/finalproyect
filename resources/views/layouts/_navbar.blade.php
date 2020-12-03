<nav class="navbar navbar-expand-lg primary-color sticky-top">
    <a class="navbar-brand text-white" href="{{route('home')}}">AWLAPOP</a>
    <a href=""><i class="fas fa-cloud-upload-alt"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse align-content-center justify-content-end" id="navbarSupportedContent">
    <input name="" placeholder="Busca tu producto" type="text" maxlength="150" autocomplete="off" value="" class="">
        <svg class="searchbar" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 48 48" name="glass_icon" alt="location arrow"><path fill="#90A4AE" d="M31.263 32.547a1.975 1.975 0 012.717 0l4.454 4.284a1.81 1.81 0 010 2.627 1.975 1.975 0 01-2.717 0l-4.454-4.283a1.81 1.81 0 010-2.628zm-.46-2.569c-4.988 4.797-13.072 4.797-18.06 0-4.99-4.8-4.99-12.581 0-17.38 4.988-4.797 13.072-4.797 18.06 0 4.99 4.799 4.99 12.58 0 17.38zm-2.297-2.21c3.722-3.578 3.722-9.382 0-12.961-3.72-3.577-9.747-3.577-13.466 0-3.722 3.579-3.722 9.383 0 12.962 3.72 3.576 9.747 3.576 13.466 0z"></path></svg>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Usuario
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('announcement.create')}}">Subir Producto</a>
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
