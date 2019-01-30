@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @permission('delete-client')
                        <h4>You can delete a client</h4>
                    @endpermission


                    @role('admin')        
                        <h4>You're an admin</h4>
                    @endrole    

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
