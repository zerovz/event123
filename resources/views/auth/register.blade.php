@extends('layout')
@section('title')
    Registracija
    @endsection
@section('content')
    <form method="post" action="/auth/register">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" value="">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value="">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Register</button>
        </div>
    </form>
@endsection
@section('above')
    @include('errors')
@endsection