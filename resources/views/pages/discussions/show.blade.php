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
                    <h2 class="mb-0">{{$discussion->title}}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8 mb-5 mb-lg-0 ">
                    <div class="card card-discussions mb-5  shadow">
                        <div class="row">
                            <div class="col-12">
                                <p>
                                    {!! $discussion->content !!}
                                </p>
                                <div class="mb-3">
                                    <a href={{ route('discussions.categories.show', $discussion->category->slug) }}><span class="badge rounded-pill text-bg-light">{{$discussion->category->slug}}</span></a>
                                </div>
                                <div class="row align-items-start justify-content-between">
                                    <div class="col">
                                        <span class="color-gray me-2">
                                            <a href="javascript:;" id="share-discussion">Share</a>
                                            <input type="text" value={{route('discussions.show', $discussion->slug)}} id='current-url' class="d-none">
                                        </span>
                                        @if($discussion->user_id == auth()->id())
                                            <span class="color-gray me-2">
                                                <a href="{{route('discussions.edit', $discussion->slug)}}">
                                                    Edit
                                                </a>
                                            </span>
                                            <form action={{route('discussions.destroy',$discussion->slug)}} class="d-inline-block lh-1" method="POST">
                                                @csrf
                                                @method("DELETE")
                                                <button class="color-gray me-2 btn p-0" id="delete-discussion">
                                                    <span class="card-discussion-delete-btn">Delete </span>                             
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                    <div class="col-5 col-lg-3 d-flex">
                                        <a href="" class="card-discussions-show-avatar-wrapper flex-shrink-0 rounded-circle overflow-hidden me-1 d-flex align-items-center">
                                            <img src="{{filter_var($discussion->user->picture, FILTER_VALIDATE_URL) ?$discussion->user->picture : Storage::url($discussion->user->picture)}}" alt="" class="avatar rounded-circle">
                                        </a>
                                        <div class="fs-12px lh-1">
                                            <span class="text-primary">
                                                <a href="" class="fw-bold d-flex align-items-start text-break mb-1">
                                                    {{$discussion->user->username}}
                                                </a>
                                                <span class="color-gray">{{$discussion->created_at->diffForHumans()}}</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="mb-5">{{$discussion->answers->count() . ' ' .Str::plural('Answer',$discussion->answers->count())}}</h3>
                    <div class="mb-5">

                        @forelse ($discussionAnswer as $Answer)
                        <div class="card card-discussions shadow mb-5">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row align-items-center">
                                        <div class="col-5 col-lg-3 d-flex">
                                            <a href="" class="card-discussions-show-avatar-wrapper flex-shrink-0 rounded-circle overflow-hidden me-1 d-flex align-items-center">
                                                <img src="{{filter_var($Answer->user->picture, FILTER_VALIDATE_URL) ? $Answer->user->picture : Storage::url($Answer->user->picture)}}" alt="" class="avatar rounded-circle">
                                            </a>
                                            <div class="fs-12px lh-1">
                                                <span class="{{$Answer->user->username === $discussion->user->username ? 'text-primary fw-bold' : ''}}">
                                                    <a href="" class="fw-bold d-flex align-items-start text-break mb-1">
                                                        {{$Answer->user->username}}
                                                    </a>
                                                    <span class="color-gray">{{$Answer->created_at->diffForHumans()}}</span>
                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                    <p>
                                        {!! $Answer->answer !!}
                                    </p>
                                    <div class="col">
                                        @if($Answer->user_id === auth()->id())
                                            <span class="color-gray me-2">
                                                <a href="{{route('answers.edit', $Answer->id)}}">
                                                    Edit
                                                </a>
                                            </span>
                                            <form action="{{route('answers.destroy', $Answer->id)}}"class="d-inline-block lh-1" method="POST">
                                                @csrf
                                                @method("DELETE")
                                                <button class="color-gray me-2 btn p-0 delete-answer" id="delete-answer">
                                                    <span class="card-discussion-delete-btn">Delete </span>                             
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                            <div class="card card-discussions shadow"> 
                                No Answer ! 
                            </div>
                        @endforelse

                        {{$discussionAnswer->links()}}
                    </div>

                    @auth
                            <h3 class="mb-5">
                                Your answer
                            </h3>
                            <div class="card card-discussions shadow">
                                <form action="{{route('discussions.answer.store', $discussion->slug)}}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <textarea name="answer" id="answer" cols="30" rows="5">{{old('answer')}}</textarea>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary me-4">Submit </button>
                                    </div>
                                </form>
                            </div>
                        @endauth
                        @guest
                            <div class="fw-bold text-center">
                                Please
                                <a href={{route('auth.login.show')}}><u class="text-primary"> sign in</u></a> 
                                or 
                                <a href={{route('auth.signup.show')}}><u class="text-primary">create an account</u></a> to participate in the discussion
                            </div> 
                        @endguest
                </div>

                <div class="col-12 col-lg-4">
                    <div class="card  shadow">
                        <h3>All Categories</h3>
                        <div>
                            @foreach ($categories as $category)
                            <a href={{route('discussions.categories.show', $category->slug)}}>
                                <span class="badge rounded-pill text-bg-light">{{$category->name}}</span>
                            </a>
                        @endforeach
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
        });

        $('#delete-discussion').click(function(){
            if(!confirm('Do you want to delete this discussion?')){
                event.preventDefault();
            }
        })
        $('.delete-answer').click(function(){
            if(!confirm('Do you want to delete this answer?')){
                event.preventDefault();
            }
        })

        $('#answer').summernote({
            placeholder:"Your reply",
            tabSize:2,
            height:220,
            toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link']],
                    ['view', ['codeview', 'help']],
                ]
        })

        $('span.note-icon-caret').remove()
    </script>
@endsection

