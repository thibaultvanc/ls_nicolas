@extends('layouts.admin')

@section('content')


    <div class="row">
        <div class="col-md-3">
            <h2>Tables</h2>
            <div class="list-group">
            @foreach($tableList as $Table)
                <a  href="{{route('admin.devis.{devis}.tables.fields.index',[$devis->id, $Table->id])}}" class="list-group-item">
                    {{$Table->name}}
                </a>
            @endforeach
        </div>
        </div>
        <div class="col-md-9">
            <h1>Field List for table <b>{{$table->name}}</b> <a href="{{ route('admin.devis.{devis}.tables.fields.create', [$devis->id, $table->id]) }}" class="btn btn-primary pull-right btn-sm">Add New Field</a></h1>
            <div class="table">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>id</th><th>Name</th><th>Type</th><th>Is Unique</th><th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    {{-- */$x=0;/* --}}
                    @foreach($field as $item)
                        {{-- */$x++;/* --}}
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td><a href="{{ url('admin/field', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->type }}</td><td>{{ $item->is_unique }}</td>
                            <td>
                                <a href="{{route('admin.devis.{devis}.tables.fields.edit',[$devis->id, $table->id, $item->id])}}">
                                    <button type="submit" class="btn btn-primary btn-xs">Update</button>
                                </a> /
                                {!! Form::open([
                                    'method'=>'DELETE',
                                    'url' => ['admin/field', $item->id],
                                    'style' => 'display:inline'
                                ]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pagination"> {!! $field->render() !!} </div>
            </div>
        </div>
    </div>

@endsection
