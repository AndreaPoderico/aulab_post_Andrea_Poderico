<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand tagesschrift-regular" href="{{ route('homepage') }}">LaTanaDelConiglio
        </a>        
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          @auth
          <li class="nav-item">
            <a href="{{route('article.create')}}" class="nav-link">Inserisci un articolo</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ciao, {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="" class="dropdown-item" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
              </li>
              <form action="{{ route('logout') }}" method="POST" id="form-logout" class="d-none">
                @csrf
              </form>
            </ul>
          </li>
          @endauth

          @guest

          <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Benvenuto Ospite</a>

            <ul class="dropdown-menu">
              <li>
                <a href="{{ route('login') }}" class="dropdown-item">Accedi</a>
              </li>
              <li>
                <a href="{{ route('register') }}" class="dropdown-item">Registrati</a>
              </li>
            </ul>
          </li>
          @endguest

          
        </ul>
        <form class="d-flex me-auto searchForm mt-3" role="search">
          <div class="position-relative w-100">
            <input class="form-control rounded-pill bg-search me-2 ps-5" type="search" placeholder="Search for products..." aria-label="Search">
            <i class="fas fa-search position-absolute ps-3 top-50 translate-middle-y"></i>
          </div>
        </form>
      </div>
    </div>
  </nav>