@extends('master')

@section('content')
    <div class="col-md-8">
        <form action="/login" method="POST">
            {{csrf_field()}}
            
            <h2 class="h2">Sign-in</h2>
            
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="form-group">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>

        @include('partials.error')
    </div>
@endsection