@extends('master')


@section('content')

<div class="col-sm-8 blog-main">
    
    @foreach($posts as $post)
        @include('partials.article')
    @endforeach

</div>
<!-- /.blog-main -->
@endsection