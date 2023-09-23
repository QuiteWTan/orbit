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
                        <form action="{{ route('auth.login.login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror @error('credentials') is-invalid @enderror" 
                                    id="email" name="email" placeholder="name@example.com" 
                                    value="{{ old('email') }}" autocomplete="off" autofocus>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                @error('credentials')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control border-end-0 pe-0 rounded-0 rounded-start 
                                        @error('password') is-invalid @enderror"
                                        id="password" name="password"
                                        placeholder="Example123"
                                    >
                                    <span class="input-group-text bg-white border-start-0 pe-auto 
                                        @error('password') border-danger rounded-end @enderror">
                                        <i class='bx bxs-low-vision' id="password-toggle"></i>
                                    </span>

                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 d-grid ">
                                <button class="btn btn-primary rounded-2">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="text-center">Don't have an account? <a href="{{ route('auth.signup.show') }}" class="text-underline"><u>Sign Up</u></a></div>
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