@extends('layouts.admin')

@section('content')

    <h1>Project</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Dbase Code</th><th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $project->id }}</td> <td> {{ $project->name }} </td><td> {{ $project->dbase_code }} </td><td> {{ $project->description }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection