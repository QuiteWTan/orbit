@extends('layouts.auth')

@section('body')
    <section class="bg-gray vh-100">
        <div class="container">
            <div class="row pt-5 justify-content-center">
                <div class="col-12 col-lg-6 my-auto mb-5 mb-lg-auto me-0">
                    <div class="d-none d-lg-block">
                        <h2>Benefit of joining Orbit's Community</h2>
                        <p>
                            <ul>
                                <li>Experienced Users ready to help ur error code</li>
                                <li>Learn how to communicate freely with others</li>
                                <li>Create connection in this vast community</li>
                            </ul>
                        </p>
                    </div>
                    <div class="d-block d-lg-none fs-4 text-center">
                        Create your account free!
                    </div>
                </div>
                <div class="col-12 col-lg-3 h-100">
                    <a href="" class="nav-link mb-2 text-center">
                        <h1>Orbit</h1>
                    </a>
                    <div class="card mb-3 shadow">
                        <form action="">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="email" placeholder="example@gmail.com" autocomplete="off" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="example@gmail.com" autocomplete="off" autofocus>
                            </div>
                            <div class="mb-5">
                                <label for="email" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control border-end-0 pe-0 rounded-0 rounded-start" id="password" placeholder="example123" autocomplete="off">
                                    <i class='bx bxs-low-vision input-group-text bg-white border-start-0 pe-auto' id="password-toggle"></i>
                                </div>
                            </div>
                            <div class="mb-3 d-grid ">
                                <button class="btn btn-primary rounded-2">Sign Up</button>
                            </div>
                        </form>
                    </div>
                    <div class="text-center">Already have an account? <a href="" class="text-underline"><u>Login</u></a></div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('after-script')
    <script>
        var showPassword = false;

        $('#password-toggle').on('click', function(){
            showPassword = !showPassword;

            if(showPassword){
                $('#password-toggle').removeClass( "bxs-low-vision" ).addClass( "bx-show" );
                $('#password').attr('type','text')
            }else{
                $('#password-toggle').removeClass( "bx-show" ).addClass( "bxs-low-vision" );
                $('#password').attr('type','password')
            }
        })
    </script>
@endsection