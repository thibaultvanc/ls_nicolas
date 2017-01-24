@extends('layouts.admin')

@section('content')


'fromField', 'fromField.table', 'toField','toField.table' ,'toModel', 'onField','onField.table', 'pivotTable'

{{-- {{dd(1,$relation1->toArray(),2,$relation2->toArray())}} --}}

<edit-belongs-to-many :devis="{{$devis}}" :relation1="{{$relation1}}" :relation2="{{$relation2}}"></edit-belongs-to-many>


@endsection


@section('footer_scripts')

@stop
