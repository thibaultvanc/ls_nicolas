@extends('layouts.admin')

@section('content')
    <h2>Edit relationships</h2>
        {!! Form::open(['route' => ['admin.devis.{devis}.tables.store_table_relation',$devis->id, $table->id], 'files' => false ,'class' => 'form-horizontal ']) !!}
<div class="well">


    <div class="row">
        <div class="col-md-4">
            <a href="{{route('admin.devis.{devis}.admin.table.edit', [$devis->id, $from_field->table()->first()->id])}}">
                {{$table->id}} - {{$table->model}}
            </a>
            </b><br>
            {{$from_field->id}} - {{$from_field->name}}
        </div>
        <input type="hidden" name="table_id" value="{{$table->id}}">
        <input type="hidden" name="from_field_id" value="{{$from_field->id}}">
        <div class="col-md-4">




                <input type="hidden" name="devis_id" value="{{$devis->id}}">
                {{-- <input type="hidden" name="old_laravel_name" value="{{$relationName}}"> --}}



                {{-- <a href="{{route('admin.devis.{devis}.tables.add_table_relation', [$devis->id, $table->id])}}" class="btn btn-success"> <i class="fa fa-plus">Add relationship</i></a> --}}

            {{-- {{$table->model}} --}}


                <select name="laravel_name" class="form-control">
                    <option value="" ></option>
                    <option value="hasMany" >hasMany</option>
                    <option value="belongsTo" >belongsTo</option>
                    <option value="belongsToMany" >belongsToMany</option>
                    {{-- <option value="hasOne" @if($relationName == 'hasOne') selected @endif>hasOne</option> --}}
                    {{-- <option value="MorphedByMany" @if($relationName == 'MorphedByMany') selected @endif>MorphedByMany</option> --}}
                    {{-- <option value="MorphToMany" @if($relationName == 'MorphToMany') selected @endif>MorphToMany</option> --}}
                </select>



                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif






        </div>
        <div class="col-md-4">

            <b>

                <select name="to_model" class="form-control">
                    <option value=""></option>
                    @foreach($devis->tables()->get() as $table_a)
                        <option value="{{$table_a->id}}">{{$table_a->model}}</option>
                    @endforeach
                </select>

        </div>
    </div>
</div>


{!! Form::submit('Envoyer', ['class' => 'btn btn-info pull-right']) !!}

{!! Form::close() !!}

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
@endsection


@section('footer_scripts')

@stop
