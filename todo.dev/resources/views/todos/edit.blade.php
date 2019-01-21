@extends('layouts.app')

@section('content')
    <h1>Edit To do</h1>
    <a class="btn btn-primary" href="/todo/{{$todo->id}}">Go Back</a>
    {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST' ]) !!}

        {{ Form::bsText('text', $todo->text) }}

        {{ Form::bsTextArea('body', $todo->body) }}

        {{ Form::bsText('due', $todo->due) }}

        {{ Form:: hidden('_method','PUT')}}

        {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}    


@endsection