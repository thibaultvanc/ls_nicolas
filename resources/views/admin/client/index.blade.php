@extends('layouts.admin')

@section('content')

    <h1>Client</h1>

    <a href="{{ url('admin/client/create') }}" class="btn btn-primary pull-right btn-sm">Add New Client</a>
    <a href="{{ url('admin/client/export') }}" class="btn btn-primary pull-right btn-sm">exporter</a>


    <div class="table">
        <table class="table table-bordered table-striped table-hover" data-toggle="table" data-show-export="true">
            <thead>
                <tr>
                    <th data-field="id">Id</th><th>société</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($client as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->firm_name }}</td>
                    <td><a href="{{ url('admin/client', $item->id) }}">{{ $item->first_name }}</a></td><td>{{ $item->last_name }}</td><td>{{ $item->email }}</td>
                    <td>
                        <a href="{{ url('admin/client/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/client', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $client->render() !!} </div>
    </div>

@endsection
