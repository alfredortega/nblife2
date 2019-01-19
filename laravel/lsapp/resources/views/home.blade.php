@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem blah blah blah</p>
@endsection

@section('sidebar')
    @parent
    <p>This is the appended side bar</p>
@endsection    
