<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
            <div class="container flex justify-content-between">
              <a class="navbar-brand fs-32px f-bold" href="{{route('Home')}}">Orbit</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-0 mx-lg-3">
                  <li class="nav-item d-block d-lg-none d-xl-block">
                    <a class="nav-link active" aria-current="page" href="{{route('Home')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('Home')}}">Discussion</a>
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
                    <a class="nav-link active text-nowrap" aria-current="page" href="{{route('Home')}}">Log In</a>
                  </li>
                  <li class="nav-item my-auto ps-1 pe-0">
                    <a class="btn btn-primary-white" aria-current="page" href="{{route('Home')}}">Sign Up</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <section class="container hero">
            <div class="row align-items-center h-100">
              <div class="col-12 col-lg-6">
                <h1>Laravel Based Website For <br> <span>Community Forum</span></h1>
                <p class="mb-4">Expressing and uniting the Laravel community people for better self development</p>
                <a href="#" class="btn btn-primary  me-2 mb-2 mb-lg-0">Sign Up</a>
                <a href="#" class="btn btn-secondary border-secondary text-secondary hover:text-white me-2 mb-2 mb-lg-0">Join Discussion</a>
              </div>
              <div class="col-12 col-lg-6 order-first order-lg-last mb-3 mb-lg-0">
                <img src="{{ url('assets/images/hero-image.png')}}" class="hero-image float-lg-end" alt="">
              </div>
            </div>
          </section>

          <section class="container min-h-372px">
            <div class="row">
              <div class="col-12 col-lg-4 text-center">
                <img src="{{ url('assets/images/discussion.png')}}" alt="" class="promote-icon">
                <h4>Discussions</h4>
                <p class="fs-4">38364</p>
              </div>
              <div class="col-12 col-lg-4 text-center">
                <img src="{{ url('assets/images/reply.png')}}" alt="" class="promote-icon">
                <h4>Reply</h4>
                <p class="fs-4">38364</p>
              </div>
              <div class="col-12 col-lg-4 text-center">
                <img src="{{ url('assets/images/user.png')}}" alt="" class="promote-icon">
                <h4>Users</h4>
                <p class="fs-4">38364</p>
              </div>
            </div>
          </section>
          <section class="bg-green">
            <div class="container py-80px ">
              <h2 class="text-center mb-5">Help Others</h2>
              <div class="row">
                <div class="col-12 col-lg-4 mb-3">
                  <div class="card">
                    <a href="">
                      <h3>How to add a custom validation in laravel?</h3>
                    </a>
                    <div>
                      <p class="mb-5">I am working on a blogging application in Laravel 10, there are 4 user roles, among which, the</p>
                      <div class="row">
                        <div class="col me-1 me-lg-2">
                          <a href=""><span class="badge rounded-pill text-bg-light">Eloquent</span></a>
                        </div>
                        <div class="col-5 col-lg-6">
                          <div class="avatar-sm-wrapper d-inline-block">
                            <a href="" class="me-1">
                              <img src="{{ url('assets/images/user.png')}}" alt="" class="avatar rounded-circle">
                            </a>
                          </div>
                          <span class="fs-12px">
                            <a href="" class="me-2 fw-bold">Wete</a>
                            <span class="color-gray">7 hours ago</span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>

                  
                </div>

                <div class="col-12 col-lg-4 mb-3">
                  <div class="card">
                    <a href="">
                      <h3>How to add a custom validation in laravel?</h3>
                    </a>
                    <div>
                      <p class="mb-5">I am working on a blogging application in Laravel 10, there are 4 user roles, among which, the</p>
                      <div class="row">
                        <div class="col me-1 me-lg-2">
                          <a href=""><span class="badge rounded-pill text-bg-light">Eloquent</span></a>
                        </div>
                        <div class="col-5 col-lg-6">
                          <div class="avatar-sm-wrapper d-inline-block">
                            <a href="" class="me-1">
                              <img src="{{ url('assets/images/user.png')}}" alt="" class="avatar rounded-circle">
                            </a>
                          </div>
                          <span class="fs-12px">
                            <a href="" class="me-2 fw-bold">Wete</a>
                            <span class="color-gray">7 hours ago</span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>           
                </div>

                <div class="col-12 col-lg-4 mb-3">
                  <div class="card">
                    <a href="">
                      <h3>How to add a custom validation in laravel?</h3>
                    </a>
                    <div>
                      <p class="mb-5">I am working on a blogging application in Laravel 10, there are 4 user roles, among which, the</p>
                      <div class="row">
                        <div class="col me-1 me-lg-2">
                          <a href=""><span class="badge rounded-pill text-bg-light">Eloquent</span></a>
                        </div>
                        <div class="col-5 col-lg-6">
                          <div class="avatar-sm-wrapper d-inline-block">
                            <a href="" class="me-1">
                              <img src="{{ url('assets/images/user.png')}}" alt="" class="avatar rounded-circle">
                            </a>
                          </div>
                          <span class="fs-12px">
                            <a href="" class="me-2 fw-bold">Wete</a>
                            <span class="color-gray">7 hours ago</span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>                
                </div>
              </div>
            </div>
          </section>

          <section class="container min-h-372px d-flex flex-column align-items-center justify-content-center">
            <h2>Ready to contribute?</h2>
            <p class="mb-4">Are you capable of creating impact?</p>
            <div class="text-center">
              <a href="#" class="btn btn-primary  me-2 mb-2 mb-lg-0">Sign Up</a>
              <a href="#" class="btn btn-secondary border-secondary text-secondary hover:text-white me-2 mb-2 mb-lg-0">Join Discussion</a>
            </div>
          </section>

          <section class="py-80px bg-primary">
            <div class="container">
              <div class="row">
                <div class="col-12 col-lg-6 mb-5 mb-lg-0">
                  <a class="navbar-brand fs-40px f-bold mb-4 text-white" href="{{route('Home')}}">Orbit</a>
                  <p class="text-white">Empowering the laravel community <br>to connect, share and learn.</p>
                </div>
                <div class="col-12 col-lg-6 me-auto">
                  <div class="d-flex flex-column flex-lg-row justify-content-end">
                    <div class="d-flex flex-column me-140px mb-3 mb-lg-0">
                      <p class="fw-bold fs-5 text-white text-nowrap">
                        Contact
                      </p>
                      <ul class="list-unstyled">
                        <li class="text-white mb-3">Orbit@gmail.com</li>
                        <li class="text-white ">OrbitOffice123@gmail.com</li>
                      </ul>
                    </div>
                    <div class="d-flex flex-column">
                      <p class="fw-bold fs-5 text-white">Links</p>
                      <ul class="list-unstyled">
                        <li class="text-white mb-2"><a href="">Home</a></li>
                        <li class="text-white mb-2"><a href="">Discussion</a></li>
                        <li class="text-white mb-2"><a href="">About Us</a></li>
                      </ul>
                    </div>
                  </div>  
                </div>
              </div>
            </div>
          </section>
    </body>
</html>

 