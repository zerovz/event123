@extends('layout')

@section('title')
    Popis događaja
@endsection
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Događaj</th>
            <th>Datum</th>
            <th>Početak</th>
            <th>Lokacija</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($events as $event)
            <tr>
                <td>{{ $event->id }}</td>
                <td><a href="{{ action('EventsController@show', [$event->date, $event->title]) }}">{{ $event->title }}</a></td>
                <td>{{ $event->date }}</td>
                <td>{{ $event->time }}</td>
                <td>{{ $event->location }}</td>
                <td>@if (($event->active) == 1)
                        <i class="icon-check"></i>
                        @else
                        <i class="icon-check-empty"></i>

                        @endif</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection