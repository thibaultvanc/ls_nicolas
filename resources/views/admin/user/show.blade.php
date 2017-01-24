@extends('layouts.admin')

@section('content')

    <h1>User</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>First Name</th><th>Last Name</th><th>Client Id</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $user->id }}</td> <td> {{ $user->first_name }} </td><td> {{ $user->last_name }} </td><td> {{ $user->client_id }} </td>
                </tr>
            </tbody>    
        </table>
    </div>
{{ $user->id }}
@endsection