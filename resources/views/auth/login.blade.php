@extends('layout')
@section('title')
    Prijava
@endsection
@section('content')
    <form method="post" action="/auth/login">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}">
        </div>
        <div class="form-group">
            <input type="checkbox" name="remember">Remember Me</input>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Login</button>
        </div>
    </form>
@endsection

@section('above')
    @include('errors')
@endsection