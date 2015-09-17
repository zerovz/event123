@extends('ticket')

@section('title')
    Prikaz doga?aja
@endsection
@section('content')
    <h1>{{ $event->title }}</h1>
    <h3>{{ $event->date }} @ {{ $event->time }}</h3>
    <h3>{{ $event->location }}</h3>
    <hr />
    <p>{!! $event->desc !!}</p>
@endsection