@extends('layouts.admin')

@section('content')

    <h1>Field</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Type</th><th>Is Unique</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $field->id }}</td> <td> {{ $field->name }} </td><td> {{ $field->type }} </td><td> {{ $field->is_unique }} </td>
                </tr>
            </tbody>    
        </table>
    </div>
{{ $field->id }}
@endsection