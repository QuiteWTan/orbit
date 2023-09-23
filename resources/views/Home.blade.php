@extends('layouts.app')

@section('body')  
<section class="container hero">
  <div class="row align-items-center h-100">
    <div class="col-12 col-lg-6  mb-3 mb-lg-0">
      <img src="{{ url('assets/images/hero-image.png')}}" class="hero-image float-lg-end" alt="">
    </div>
    <div class="col-12 col-lg-6">
      <h1>Laravel Based Website For <br> <span>Community Forum</span></h1>
      <p class="mb-4">Expressing and uniting the Laravel community people for better self development</p>
      <a href={{route('auth.signup.show')}} class="btn btn-primary  me-2 mb-2 mb-lg-0">Sign Up</a>
      <a href={{route('discussions.index')}} class="btn btn-secondary border-secondary text-secondary hover:text-white me-2 mb-2 mb-lg-0">Join Discussion</a>
    </div>
  </div>
</section>

<section class="container min-h-300px">
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

<section class="bg-green image-bg">
  <div class="container py-80px ">
    <h2 class="text-center mb-5 text-white">Help Others</h2>
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

@endsection
       

 