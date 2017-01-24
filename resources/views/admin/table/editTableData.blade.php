@extends('layouts.admin')

@section('content')

<center>
    <h4>Edit recrods to table : </h4>
    <h1>{{$table->name}}</h1>
</center>


<edit-table-data :table="{{ $table }}" primary="{{ $table->getPrimaries()->first()->name }}"></edit-table-data>


@stop
