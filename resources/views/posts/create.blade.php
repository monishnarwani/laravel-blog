@extends('master')

@section('content')

<div class="col-sm-8 blog-main">
    <div class="blog-post">
        <h1>Publish a Post</h1>

        <hr>

        <form>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" placeholder="Title" name="title">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Body</label>
                <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
            </div>
        
            <button type="submit" class="btn btn-primary">Publish</button>
        </form>
    </div>
</div>
@endsection