@extends('layouts.admin')

@section('content')

    <h1>Namespace <a href="{{ url('admin/'.$devis->id.'/namespace/create') }}" class="btn btn-primary pull-right btn-sm">Add New Namespace</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th><th>Name</th><th>devis</th><th>Theme</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($namespaceList as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/'.$devis->id.'/namespace/'.$item->id) }}">{{ $item->name }}</a></td><td>{{ $item->devis->number }}</td><td>{{ $item->theme->name }}</td>
                    <td>
                        <a href="{{ url('admin/'.$devis->id.'/namespace/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/'.$devis->id.'/namespace/'.$item->id ],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $namespaceList->render() !!} </div>
    </div>

@endsection
