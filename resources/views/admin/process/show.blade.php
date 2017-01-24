@extends('layouts.admin')

@section('content')

    <h1>Process</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Content</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $process->id }}</td> <td> {{ $process->name }} </td><td> {{ $process->content }} </td>
                </tr>
            </tbody>    
        </table>
    </div>
{{ $process->id }}
@endsection