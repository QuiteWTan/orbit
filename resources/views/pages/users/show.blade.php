@extends('layouts.app')

@section('body')
    <section class="bg-gray pt-4 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 mb-5 mb-lg-0 ">
                    <div class="d-flex mb-4 align-items-center justify-content-center">
                        <div class="avatar-wrapper rounded-circle overflow-hidden flex-shrink-0 me-4">
                            <img src="{{ $picture}}" alt="" class="avatar">
                        </div>
                        <div>
                            <div class="mb-4">
                                <div class="fs-2 fw-bold mb-1 lh-1 text-break">
                                    {{ $user->username}}
                                </div>
                                 <div class="color-gray">
                                    Account created in {{$user->created_at->toDateString()}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <input type="text" id="current-url" class="d-none" value={{ request()->url()}}>
                        @auth
                            @if ($user->id == auth()->id())
                                <a href="{{route('users.edit', $user->username)}} " class="btn btn-primary me-4">Edit Profile</a>
                            @endif
                        @endauth
                        <a href="javascript:;" id="share-profile"  class=" @if($user->id !== auth()->id()) btn btn-primary me-4 @endif">Share</a>
                        
                    </div>
                    
                </div>
                <div class="col-12 col-lg-8">
                    <div class="mb-5">
                        <h2 class="mb-3">My Discussions</h2>
                        <div>
                            @forelse ($discussions as $discussion)
                            <div class="card card-discussions shadow">
                                <div class="row">
                                    <div class="col-12 col-lg-2 mb-1 mb-lg-0 d-flex flex-row flex-lg-column align-items-end">
                                        <div class="text-nowrap color-gray">
                                            {{$discussion->answers->count() . ' ' . Str::plural('Answer',$discussion->answers->count())}}
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-10">
                                        <a href={{route('discussions.show' , $discussion->slug)}}>
                                            <h3>{{ $discussion->title}}</h3>
                                        </a>
                                        <p>{!! $discussion->content_preview !!}</p>
                                        <div class="row">
                                            <div class="col me-1 me-lg-2">
                                                <a href={{route('discussions.categories.show', $discussion->category->slug)}} class="badge rounded-pill text-bg-light"><span>{{ $discussion->category->name}}</span></a>
                                            </div>
                                            <div class="col-5 col-lg-4">
                                                <div class="avatar-sm-wrapper d-inline-block ">
                                                    <a href={{route('users.show', $discussion->user->username)}} class="me-1">
                                                        <img src="{{filter_var($discussion->user->picture, FILTER_VALIDATE_URL) ?$discussion->user->picture : Storage::url($discussion->user->picture)}}" alt="" class="avatar rounded-circle">
                                                    </a>
                                                </div>
                                                <span class="fs-12px">
                                                    <a href="" class="me-1 fw-bold">{{ $discussion->user->username}}</a>
                                                    <span class="color-gray">{{$discussion->created_at->diffForHumans()}}</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            @empty
                            <div class="card card-discussions shadow">
                                No Discussion from you yet!
                            </div> 
                            @endforelse

                            {{$discussions->links()}}
                        </div>
                    </div>
                    <div>
                        <h2 class="mb-3">My Answer</h2>
                        <div>
                            @forelse ($answers as $answer)
                                <div class="card card-discussions shadow">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <span>Replied to</span>
                                            <span class="fw-bold text-primary">
                                                <a href={{route('discussions.show', $answer->discussion->slug)}}>
                                                    {{$answer->discussion->title}}
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            <div class="card card-discussions shadow">
                                You haven't reply to anyone, go and start one!
                            </div> 
                            @endforelse

                            {{$discussions->links()}}
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
            $('#share-profile').click(function(){
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