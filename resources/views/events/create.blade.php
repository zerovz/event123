@extends('layout')

@section('title')
    Kreiraj događaj
@endsection

@section('content')
    <form method="post" action="/events" class="form-horizontal row-fluid">
        @include('events.form')
    </form>
@endsection

@section('above')
    @include('errors')
@endsection

