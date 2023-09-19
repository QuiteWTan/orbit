@extends('layouts.auth')
@section('body')
    <section class="bg-gray">
        <div class="container h-100 pt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-3">
                    <a href="" class="nav-link mb-3 text-center text-primary fs-40px fw-bold">
                        Orbit
                    </a>
                    <div class="card mb-5 shadow">
                        <form action="">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="example@gmail.com" autocomplete="off" autofocus>
                            </div>
                            <div class="mb-5">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control border-end-0 pe-0 rounded-0 rounded-start" id="password" placeholder="example123" autocomplete="off">
                                    <i class='bx bxs-low-vision input-group-text bg-white border-start-0 pe-auto' id="password-toggle"></i>
                                </div>
                            </div>
                            <div class="mb-3 d-grid ">
                                <button class="btn btn-primary rounded-2">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="text-center">Don't have an account? <a href="" class="text-underline"><u>Sign Up</u></a></div>
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