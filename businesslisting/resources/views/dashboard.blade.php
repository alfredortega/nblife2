@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Dashboard
                <span class="pull-right"><a href="listings/create" class="btn btn-success btn-xs">Add Listing</a></span>
            </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <h3>Your Listing</h3>

                @if(count($listings))
                    <table class="table table-striped">
                        <tr>
                            <th>Company</th>
                            <th></th>
                            <th></th>
                        </tr>
                            @foreach($listings as $listing)
                                <tr>
                                    <td>{{$listing->name}}</td>
                                    <td><a href="/listings/{{$listing->id}}/edit" class="pull-right btn btn-primary" >Edit</a></td>
                                    <td>
                                        {!! Form::open(['action' => ['ListingsController@destroy', $listing->id], 'method' => 'POST', 'class' => 'pull-left', 'onsubmit' => 'return confirm("Are you sure");' ]) !!}
                                            {{ Form::hidden('_method','DELETE') }}
                                            {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                    </table> 
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
