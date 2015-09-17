@extends('layout')

@section('title')
    Prikaz događaja
@endsection
@section('content')
    <h1>{{ $event->title }}</h1>
    <h3>{{ $event->date }} @ {{ $event->time }}</h3>
    <h3>{{ $event->location }}</h3>
    <hr />
    <p>{!! $event->desc !!}</p>
@endsection
@section('below')
    <div class="btn-controls">
        <div class="btn-box-row row-fluid">
            <a href="/events/sell/{{ $event->id }}" class="btn-box span3">
                <i class="icon-shopping-cart"></i>
                <b>Prodaj ulaznice</b>
            </a>
            <a href="#" class="btn-box span3">
                <i class="icon-eye-open"></i>
                <b>Provjeri ulaznice</b>
            </a>
            <a href="#" class="btn-box span3">
                <i class="icon-asterisk"></i>
                <b>Poništi ulaznice</b>
            </a>
            <a href="#" class="btn-box span3">
                <i class="icon-money"></i>
                <b>Cijene ulaznica</b>
            </a>
        </div>
        <div class="btn-box-row row-fluid">
            <a href="#" class="btn-box small span2">
                <i class="icon-remove"></i>
                <b>Izbriši događaj</b>
            </a>
        </div>
    </div>
@endsection