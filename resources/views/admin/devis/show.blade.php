@extends('layouts.admin')

@section('content')

    <h1>Devi</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Number</th><th>Esperence</th><th>Note</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $devi->id }}</td> <td> {{ $devi->number }} </td><td> {{ $devi->esperence }} </td><td> {{ $devi->note }} </td>
                </tr>
            </tbody>    
        </table>
    </div>
{{ $devi->id }}
@endsection