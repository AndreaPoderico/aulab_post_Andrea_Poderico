<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
      <a class="navbar-brand tagesschrift-regular" href="{{ route('homepage') }}">
          
          <img src="{{ asset('img/logoConiglio.png') }}" alt="Logo LaTanaDelConiglio" class="logo">
          
          LaTanaDelConiglio

      </a>        
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse m-0" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <form class="d-flex  searchForm mt-3" role="search">
          <div class="position-relative w-100">
            <input class="form-control rounded-pill bg-search  ps-5" type="search" placeholder="Cerca prodotti..." aria-label="Search">
            <i class="fas fa-search position-absolute ps-3  top-50 translate-middle-y"></i>
          </div>
        </form>
        @auth
        <li class="nav-item ms-1">
          <a href="{{route('article.create')}}" class="nav-link">
            <button class="btn btn-primary">
              <i class="fas fa-plus"></i>
              Inserisci articolo
            </button>
          </a>
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

          <a class="nav-link dropdown-toggle ms-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Benvenuto Ospite</a>

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

        <li class="nav-item ms-1">
          <a href="{{route('article.index')}}" class="nav-link" aria-current="page">Tutti gli articoli</a>
        </li>
        <li class="nav-item">
          <i class="fa-solid fa-cart-shopping fs-4 "></i>
        </li>

        
      </ul>
    </div>
  </div>
</nav>
