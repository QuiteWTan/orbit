@extends('layouts.app')

@section('body')
    <section class="pt-4 pb-5">
        <div class="container">
            <div class="mb-5">
                <div class="d-flex align-items-center">
                    <div class="d-flex">
                        <div class="fs-2 fw-bold color-gray me-2 mb-0">Discussions</div>
                        <div class="fs-2 fw-bold color-gray me-2 mb-0">>></div>
                    </div>
                    <h2 class="mb-0">How to add a custom validation in laravel</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8 mb-5 mb-lg-0 ">
                    <div class="card card-discussions mb-5  shadow">
                        <div class="row">
                            <div class="col-1 d-flex flex-column justify-content-start align-items-center">
                                <a href="" class="mb-1"><i class='bx bx-like bx-md'></i></a>
                                <span class="fs-4 color-gray mb-1">12</span>
                            </div>
                            <div class="col-11">
                                <p>
                                    How to add a custom validation in laravelHow to add a custom validation in laravelHow to add a custom validation in laravelHow to add a custom validation in laravelHow to add a custom validation in laravelHow to add a custom validation in laravelHow to add a custom validation in laravelHow to add a custom validation in laravelHow to add a custom validation in laravelHow to add a custom validation in laravel
                                </p>
                                <div class="mb-3">
                                    <a href=""><span class="badge rounded-pill text-bg-light">Facade</span></a>
                                </div>
                                <div class="row align-items-start justify-content-between">
                                    <div class="col">
                                        <span class="color-gray me-2">
                                            <a href="javascript:;" id="share-discussion">Share</a>
                                            <input type="text" value={{ url('discussion/details')}} id='current-url' class="d-none">
                                        </span>
                                    </div>
                                    <div class="col-5 col-lg-3 d-flex">
                                        <a href="" class="card-discussions-show-avatar-wrapper flex-shrink-0 rounded-circle overflow-hidden me-1 d-flex align-items-center">
                                            <img src="{{ url('assets/images/user.png')}}" alt="" class="avatar rounded-circle">
                                        </a>
                                        <div class="fs-12px lh-1">
                                            <span class="text-primary">
                                                <a href="" class="fw-bold d-flex align-items-start text-break mb-1">
                                                    Wete
                                                </a>
                                                <span class="color-gray">7 hours ago</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="mb-5">2 Answers</h3>
                    <div class="mb-5">
                        <div class="card card-discussions  shadow">
                            <div class="row">
                                <div class="col-1 d-flex flex-column justify-content-start align-items-center">
                                    <a href="" class="mb-1">
                                        <i class='bx bx-like bx-sm'></i>
                                    </a>
                                    <span class="fs-6 color-gray mb-1">12</span>
                                </div>
                                <div class="col-11">
                                    <p>
                                        How to add a custom validation in laravelHow to add a custom validation in laravelHow to add a custom validation in laravelHow to add a custom validation in laravelHow to add a custom
                                    </p>
                                    <div class="row align-items-end justify-content-end">
                                        <div class="col-5 col-lg-3 d-flex">
                                            <a href="" class="card-discussions-show-avatar-wrapper flex-shrink-0 rounded-circle overflow-hidden me-1 d-flex align-items-center">
                                                <img src="{{ url('assets/images/user.png')}}" alt="" class="avatar rounded-circle">
                                            </a>
                                            <div class="fs-12px lh-1">
                                                <span class="text-primary">
                                                    <a href="" class="fw-bold d-flex align-items-start text-break mb-1">
                                                        Wete123
                                                    </a>
                                                    <span class="color-gray">5 hours ago</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-discussions shadow mb-5">
                            <div class="row">
                                <div class="col-1 d-flex flex-column justify-content-start align-items-center">
                                    <a href="" class="mb-1">
                                        <i class='bx bx-like bx-sm'></i>
                                    </a>
                                    <span class="fs-6 color-gray mb-1">12</span>
                                </div>
                                <div class="col-11">
                                    <p>
                                        How to add a custom validation in laravelHow to add a custom validation in laravelHow to add a custom validation in laravelHow to add a custom validation in laravelHow to add a custom
                                    </p>
                                    <div class="row align-items-end justify-content-end">
                                        <div class="col-5 col-lg-3 d-flex">
                                            <a href="" class="card-discussions-show-avatar-wrapper flex-shrink-0 rounded-circle overflow-hidden me-1 d-flex align-items-center">
                                                <img src="{{ url('assets/images/user.png')}}" alt="" class="avatar rounded-circle">
                                            </a>
                                            <div class="fs-12px lh-1">
                                                <span class="text-primary">
                                                    <a href="" class="fw-bold d-flex align-items-start text-break mb-1">
                                                        Wete123
                                                    </a>
                                                    <span class="color-gray">5 hours ago</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="fw-bold text-center">
                            Please<a href=""><u class="text-primary"> sign in</u> </a> or <a href=""><u class="text-primary">create an account</u></a> to participate in the discussion
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="card  shadow">
                        <h3>All Categories</h3>
                        <div>
                            <a href="" class="badge rounded-pill text-bg-light">Eloquent</a>
                            <a href="" class="badge rounded-pill text-bg-light">Facade</a>
                            <a href="" class="badge rounded-pill text-bg-light">Helper</a>
                        </div>
                    </div>
                </div>

            </div>
        </div> 
    </section>    
@endsection

@section('after-script')
    <script>
        $(document).ready(function(){
            $('#share-discussion').click(function(){
                var copyUrl = $('#current-url')

                copyUrl[0].select();
                copyUrl[0].setSelectionRange(0,99999);
                navigator.clipboard.writeText(copyUrl.val());

                var alert = $('#alert');
                alert.removeClass('d-none');

                var alertContainer =alert.find('.container');
                console.log(alertContainer)
                alertContainer.first().text('Discussion link has been copied');

            })
        })
    </script>
@endsection

