@extends('layouts.admin')

@section('content')

    <h1>User <a href="{{ url('admin/user/create') }}" class="btn btn-primary pull-right btn-sm">Add New User</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th><th>First Name</th><th>Last Name</th><th>Client Id</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($user as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/user', $item->id) }}">{{ $item->first_name }}</a></td><td>{{ $item->last_name }}</td><td>{{ $item->client_id }}</td>
                    <td>
                        <a href="{{ url('admin/user/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/user', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $user->render() !!} </div>
    </div>

@endsection
