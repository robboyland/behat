@extends('layouts.default')

@section('content')
    {{ Form::open(['route' => 'guests.store', 'method' => 'post']) }}
            <div class="form-group">
                {{ Form::label('name', 'name') }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('message', 'message') }}
                {{ Form::textarea('message', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::submit('submit', ['class' => 'btn btn-primary']) }}
            </div>
        {{ Form::close() }}
@stop
