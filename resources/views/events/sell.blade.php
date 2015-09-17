@extends('layout')

@section('title')
    Odabir ulaznica
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
            <a href="/events/generate/{{ $event->id }}/50" class="btn-box span3">
                <i>50 HRK</i>
                <b>Predprodaja</b>
            </a>
            <a href="/events/generate/{{ $event->id }}/70" class="btn-box span3">
                <i>70 HRK</i>
                <b>Dan koncerta</b>
            </a>
        </div>
    </div>
@endsection
