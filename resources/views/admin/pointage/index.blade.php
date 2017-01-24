@extends('layouts.admin')

@section('content')

    <h1>Pointage <a href="{{ url('admin/pointage/create') }}" class="btn btn-primary pull-right btn-sm">Add New Pointage</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Date</th><th>Devis Id</th><th>Dbase</th><th>minutes</th><th>heures</th><th>type</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>

            {{-- */$x=0;/* --}}
            @foreach($pointage as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/pointage', $item->id) }}">{{ $item->date }}</a></td><td>{{ $item->devis_id }}</td><td>{{ $item->dbase }}</td>
                    <td>
                        {{ $item->minutes }}
                    </td>
                    <td>
                        {{ round($item->minutes / 60,2) }}
                    </td>
                    <td>
                        {{ $item->type }}
                    </td>
                    <td>
                        <a href="{{ url('admin/pointage/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/pointage', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $pointage->render() !!} </div>
    </div>

@endsection
