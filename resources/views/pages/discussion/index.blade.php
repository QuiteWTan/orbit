@extends('layouts.app')

@section('body')
    <section class="bg-gray pt-4 pb-5">
        <div class="container">
            <div class="mb-4">
                <div class="mb-3 d-flex align-items-center justify-content-between">
                    <h2 class="me-4 mb-0 ">All Discussions</h2>
                    <div>58,234 discussions</div>
                </div>
                <a href="" class="btn btn-primary ">Login to create discussions</a>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="card card-discussions shadow">
                        <div class="row">
                            <div class="col-12 col-lg-2 mb-1 mb-lg-0 d-flex flex-row flex-lg-column align-items-end">
                                <div class="text-nowrap me-2 me-lg-0">
                                    3 likes
                                </div>
                                <div class="text-nowrap color-gray">
                                    9 Answers
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <a href={{route('show')}}>
                                    <h3>how to add custom validation in laravel</h3>
                                </a>
                                <p>I am working on a blogging application in Laravel 10, there are 4 user roles, among which, the</p>
                                <div class="row">
                                    <div class="col me-1 me-lg-2">
                                        <a href="" class="badge rounded-pill text-bg-light"><span>Eloquent</span></a>
                                    </div>
                                    <div class="col-5 col-lg-4">
                                        <div class="avatar-sm-wrapper d-inline-block ">
                                            <a href="" class="me-1">
                                                <img src="{{ url('assets/images/user.png')}}" alt="" class="avatar rounded-circle">
                                              </a>
                                        </div>
                                        <span class="fs-12px">
                                            <a href="" class="me-1 fw-bold">Wete</a>
                                            <span class="color-gray">7 hours ago</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-discussions shadow">
                        <div class="row">
                            <div class="col-12 col-lg-2 mb-1 mb-lg-0 d-flex flex-row flex-lg-column align-items-end">
                                <div class="text-nowrap me-2 me-lg-0">
                                    3 likes
                                </div>
                                <div class="text-nowrap color-gray">
                                    9 Answers
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <a href={{route('show')}}>
                                    <h3>how to add custom validation in laravel</h3>
                                </a>
                                <p>I am working on a blogging application in Laravel 10, there are 4 user roles, among which, the</p>
                                <div class="row">
                                    <div class="col me-1 me-lg-2">
                                        <a href="" class="badge rounded-pill text-bg-light"><span>Eloquent</span></a>
                                    </div>
                                    <div class="col-5 col-lg-4">
                                        <div class="avatar-sm-wrapper d-inline-block ">
                                            <a href="" class="me-1">
                                                <img src="{{ url('assets/images/user.png')}}" alt="" class="avatar rounded-circle">
                                              </a>
                                        </div>
                                        <span class="fs-12px">
                                            <a href="" class="me-1 fw-bold">Wete</a>
                                            <span class="color-gray">7 hours ago</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card  shadow">
                        <h3>All Categories</h3>
                        <div>
                            <a href="" class="badge rounded-pill text-bg-light"><span>Eloquent</span></a>
                            <a href="" class="badge rounded-pill text-bg-light"><span>Facade</span></a>
                            <a href="" class="badge rounded-pill text-bg-light"><span>Helper</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection