<nav class="navbar navbar-expand-lg">
  <div class="container-fluid d-flex align-items-center justify-content-between">

    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center tagesschrift-regular" href="{{ route('homepage') }}">
      <img src="{{ asset('img/logoConiglio.png') }}" alt="Logo LaTanaDelConiglio" class="logo me-2">
      LaTanaDelConiglio
    </a>

    <!-- Bottone per mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar contenuto -->
    <div class="container-fluid collapse navbar-collapse justify-content-between align-items-center" id="navbarSupportedContent">

      <!-- Form di ricerca -->
      <form class="d-flex navbar-nav mb-2 mb-lg-0 search " role="search">
        <input class="form-control me-2 rounded-pill bg-search" type="search" placeholder="Cerca prodotti..." aria-label="Search"/>
        <button class="btn btn-primary rounded-pill" type="submit">Search</button>
      </form>
      <!-- Nav menu -->
      <ul class="navbar-nav mb-2 mb-lg-0 d-flex align-items-center">

        @auth
        <li class="nav-item ms-2">
          <a href="{{ route('article.create') }}" class="nav-link p-0">
            <button class="btn btn-primary">
              <i class="fas fa-plus"></i> Inserisci articolo
            </button>
          </a>
        </li>

        <li class="nav-item dropdown ms-2">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">
                Logout
              </a>
            </li>
          </ul>
          <form action="{{ route('logout') }}" method="POST" id="form-logout" class="d-none">
            @csrf
          </form>
        </li>
        @endauth

        @guest
        <li class="nav-item dropdown ms-2">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benvenuto Ospite
          </a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('login') }}" class="dropdown-item">Accedi</a></li>
            <li><a href="{{ route('register') }}" class="dropdown-item">Registrati</a></li>
          </ul>
        </li>
        @endguest

        <li class="nav-item ms-2">
          <a href="{{ route('article.index') }}" class="nav-link">Tutti gli articoli</a>
        </li>

        <li class="nav-item ms-2">
          <a href="#" class="nav-link">
            <i class="fa-solid fa-cart-shopping fs-4"></i>
          </a>
        </li>

      </ul>
    </div>
  </div>
</nav>
