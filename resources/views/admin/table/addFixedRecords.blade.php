@extends('layouts.admin')

@section('content')

<center>
    <h4>Add fixed recrods to table : </h4>
    <h1>{{$table->name}}</h1>
</center>

<set-fixed-values :table="{{ $table }}" primary="{{ $table->getPrimaries()->first()->name }}"></set-fixed-values>



@stop
