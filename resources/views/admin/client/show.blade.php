@extends('layouts.admin')

@section('content')


    <h1>Client</h1>

    @foreach($client['attributes'] as $field=>$value)
        <div class="row">
            <div class="col-md-6">{{$field}}</div>
            <div class="col-md-6">{{$value}}</div>
        </div>
    @endforeach

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>First Name</th><th>Last Name</th><th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $client->id }}</td> <td> {{ $client->first_name }} </td><td> {{ $client->last_name }} </td><td> {{ $client->email }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection