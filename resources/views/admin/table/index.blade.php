@extends('layouts.admin')

@section('content')

admin.devis.{devis}.tables.fields.index
    <h1>{{$devis->propal_title}} - {{$devis->propal_subtitle}} ({{$devis->id}})</h1>

    <hr>

    <h2>Tables : <a href="{{ route('admin.devis.{devis}.admin.table.create', ['devis'=>$devis->id]) }}" class="btn btn-primary pull-right btn-sm">Add New Table</a></h2>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Name</th><th>Model</th><th>fields</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($table as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $item->id }}</td>
                   <td> <a href="{{ route('admin.devis.{devis}.admin.table.show', [$devis->id,$item->id]) }}">{{ $item->name }}</a></td><td>{{ $item->model }}</td>
                    <td>
                        @foreach($item->fields as $field)
                            {{$field}} ({{$field->type}})<br>
                        @endforeach

                    </td>
                    <td>

                        <a href="{{ route('admin.devis.{devis}.admin.table.edit',[$devis->id, $item->id]) }}">
                             <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a>
                        

                            {!! Form::open(['method'=>'DELETE','route' => ['admin.devis.{devis}.admin.table.destroy', $devis->id , $item->id], 'style' => 'display:inline']) !!}

                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}

                        <a href="{{ route('admin.devis.{devis}.tables.fields.index',[$devis->id, $item->id]) }}">
                            <button type="submit" class="btn btn-primary btn-xs">fields</button>
                        </a>
                        <a href="{{ route('admin.devis.{devis}.admin.table.show', [$devis->id,$item->id]) }}">
                             <button type="submit" class="btn btn-warning btn-xs">Edit Fields</button>
                             </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $table->render() !!} </div>
    </div>

@endsection
