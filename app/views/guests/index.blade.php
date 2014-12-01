@extends('layouts.default')

@section('content')
    @foreach($guests as $guest)
        <article>
            <h3>{{ $guest->name }}</h3>
            <p>{{ $guest->message }}</p>
        </article>
    @endforeach
@stop
