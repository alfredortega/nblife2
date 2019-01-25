@extends('layouts.app')

@section('content')


<div class="row">
    {!! Form::open(['url' => 'foo/bar']) !!}

        {{ Form::text('text', '') }}

        {{ Form::textarea('body', '') }}

        {{ Form::text('due', '') }}

        {{ Form::checkbox('Headache', 'headache',false) }}

        {{ Form::radio('Gender', 'M',false) }}
        {{ Form::radio('Gender', 'F',true) }}

        {{ Form::select('agerange', ['1' => 'Under 18', '2' => '18-24'], '2') }}

        {{ Form::file('image')}}

        {{ Form:: hidden('_method','PUT')}}

        {{ Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}    

</div>

@endsection