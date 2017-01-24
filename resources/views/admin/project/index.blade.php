@extends('layouts.admin')

@section('content')

    <h1>Project <a href="{{ url('admin/project/create') }}" class="btn btn-primary pull-right btn-sm">Add New Project</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th><th>Name</th><th>Dbase Code</th><th>Description</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($project as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/project', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->dbase_code }}</td><td>{{ $item->description }}</td>
                    <td>
                        <a href="{{ url('admin/project/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/project', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $project->render() !!} </div>
    </div>

@endsection
