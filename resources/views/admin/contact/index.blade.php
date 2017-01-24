@extends('layouts.admin')

@section('content')

    <h1>Contact <a href="{{ url('admin/contact/create') }}" class="btn btn-primary pull-right btn-sm">Add New Contact</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($contact as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/contact', $item->id) }}">{{ $item->first_name }}</a></td><td>{{ $item->last_name }}</td><td>{{ $item->email }}</td>
                    <td>
                        <a href="{{ url('admin/contact/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/contact', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $contact->render() !!} </div>
    </div>

@endsection
