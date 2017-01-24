@extends('layouts.admin')

@section('content')

    <h1>Facture <a href="{{ url('admin/facture/create') }}" class="btn btn-primary pull-right btn-sm">Add New Facture</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>id</th><th>Number</th><th>Date</th><th>Validated By Contact</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($facture as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/facture', $item->id) }}">{{ $item->number }}</a></td><td>{{ $item->date }}</td><td>{{ $item->validated_by_contact }}</td>
                    <td>
                        <a href="{{ url('admin/facture/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/facture', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $facture->render() !!} </div>
    </div>

@endsection
