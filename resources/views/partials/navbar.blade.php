<nav class="navbar navbar-dark navbar-expand-lg bg-primary">
    <div class="container flex justify-content-between">
      <a class="navbar-brand fs-32px f-bold" href="{{route('Home')}}">Orbit</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-0 mx-lg-3">
          <li class="nav-item d-block d-lg-none d-xl-block">
            <a class="nav-link {{Route::currentRouteName() === 'Home' ? 'active' : ''}}" aria-current="page" href="{{route('Home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Route::currentRouteName() === 'index' ? 'active' : ''}}" aria-current="page" href="{{route('index')}}">Discussion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-nowrap" aria-current="page" href="{{route('Home')}}">About Us</a>
          </li>
        </ul>
        <form class="d-flex w-100 me-4 my-2 my-lg-0" role="search"  action="#" method="GET">
            <div class="input-group">
              <span class="input-group-text bg-white border-end-0">
                <i class='bx bx-search bx-sm'></i>
              </span>
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"  name="" value="">
            </div>
        </form>
        <ul class="navbar-nav ms-auto my-2 my-lg-0">
          <li class="nav-item my-auto">
            <a class="nav-link {{Route::currentRouteName() === 'auth.login.show' ? 'active' : ''}} text-nowrap" aria-current="page" href="{{route('auth.login.show')}}">Log In</a>
          </li>
          <li class="nav-item my-auto ps-1 pe-0">
            <a class="btn btn-primary-white {{Route::currentRouteName() === 'auth.signup.show' ? 'active' : ''}}" aria-current="page" href="{{route('auth.signup.show')}}">Sign Up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>