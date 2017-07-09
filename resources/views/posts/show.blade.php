@extends('master')


@section('content')

<div class="col-sm-8 blog-main">
    
    <div class="blog-post">
        <h2 class="blog-post-title"> {{$post->title}} </h2>
        <p class="blog-post-meta"> 
            {{$post->created_at->toDayDateTimeString()}}
        </p>

        <p>{{$post->body}}</p>
    </div>

    <div class="blog-post">
        <ul class="list-group">
        @foreach($post->comments as $comment)
            <li class="list-group-item">
                {{$comment->created_at->diffForHumans()}}: &nbsp;
                {{$comment->body}}
            </li>
        @endforeach
        </ul>
        

    </div>

    <div class="card">
        <div class="card-block">
            <form action="/posts/{{$post->id}}/comment" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <textarea name="body" class="form-control" id="body" cols="30" rows="10" placeholder="your Body Here."></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Add Comment</button>
                </div>
            </form>
        </div>
    </div>

    @include('partials.error')
    
</div>
<!-- /.blog-main -->
@endsection