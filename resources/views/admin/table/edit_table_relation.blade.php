@extends('layouts.admin')

@section('content')
    <h2>Edit relationships</h2>
        {!! Form::open(['route' => ['admin.devis.{devis}.relation.update',$devis->id, $from_field->id, $to_field->id], 'files' => false ,'class' => 'form-horizontal ']) !!}
<div class="well">

    <div class="row">
        <div class="col-md-4">
            From<br>
            <b>
            <a href="{{route('admin.devis.{devis}.admin.table.edit', [$devis->id, $from_field->table()->first()->id])}}">
                {{$from_field->table()->first()->id}} - {{$from_field->table()->first()->model}}
            </a>
            </b><br>
            {{$from_field->id}} - {{$from_field->name}}
        </div>
        <div class="col-md-4">
            <b style="color:orangered">{{$relationName}}</b>
            <i class="fa fa-arrow-right"></i>



                <input type="hidden" name="devis_id" value="{{$devis->id}}">
                {{-- <input type="hidden" name="old_laravel_name" value="{{$relationName}}"> --}}



                {{-- <a href="{{route('admin.devis.{devis}.tables.add_table_relation', [$devis->id, $table->id])}}" class="btn btn-success"> <i class="fa fa-plus">Add relationship</i></a> --}}

            {{-- {{$table->model}} --}}


                <select name="laravel_name" class="form-control">
                    <option value="" @if($relationName == '') selected @endif></option>
                    <option value="hasMany" @if($relationName == 'hasMany') selected @endif>hasMany</option>
                    <option value="belongsTo" @if($relationName == 'belongsTo') selected @endif>belongsTo</option>
                    <option value="belongsToMany" @if($relationName == 'belongsToMany') selected @endif>belongsToMany</option>
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
            To
            <br>
            <b>
            <a href="{{route('admin.devis.{devis}.admin.table.edit', [$devis->id, $to_field->table()->first()->id])}}">
                {{$to_field->table()->first()->id}} - {{$to_field->table()->first()->model}}
            </a>
            </b><br>
            {{$to_field->id}} - {{$to_field->name}}

        </div>
    </div>
</div>

<div class="well">

    <div class="row">
        <div class="col-md-4">
            From
            <br>
            <b>
            <a href="{{route('admin.devis.{devis}.admin.table.edit', [$devis->id, $to_field->table()->first()->id])}}">
                {{$to_field->table()->first()->id}} - {{$to_field->table()->first()->model}}
            </a>
            </b><br>
            {{$to_field->id}} - {{$to_field->name}}
        </div>
        <div class="col-md-4">
            <b style="color:orangered">{{$inverseRelationName}}</b>
            <i class="fa fa-arrow-right"></i>



                {{-- <input type="hidden" name="old_inverse_laravel_name" value="{{$inverseRelationName}}"> --}}



                {{-- <a href="{{route('admin.devis.{devis}.tables.add_table_relation', [$devis->id, $table->id])}}" class="btn btn-success"> <i class="fa fa-plus">Add relationship</i></a> --}}

            {{-- {{$table->model}} --}}


                <select name="inverse_laravel_name" class="form-control">
                    <option value="" @if($inverseRelationName == '') selected @endif></option>
                    <option value="hasMany" @if($inverseRelationName == 'hasMany') selected @endif>hasMany</option>
                    <option value="belongsTo" @if($inverseRelationName == 'belongsTo') selected @endif>belongsTo</option>
                    <option value="belongsToMany" @if($inverseRelationName == 'belongsToMany') selected @endif>belongsToMany</option>
                    {{-- <option value="hasOne" @if($inverseRelationName == 'hasOne') selected @endif>hasOne</option> --}}
                    {{-- <option value="MorphedByMany" @if($inverseRelationName == 'MorphedByMany') selected @endif>MorphedByMany</option> --}}
                    {{-- <option value="MorphToMany" @if($inverseRelationName == 'MorphToMany') selected @endif>MorphToMany</option> --}}
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
            To<br>
            <b>
            <a href="{{route('admin.devis.{devis}.admin.table.edit', [$devis->id, $from_field->table()->first()->id])}}">
                {{$from_field->table()->first()->id}} - {{$from_field->table()->first()->model}}
            </a>
            </b><br>
            {{$from_field->id}} - {{$from_field->name}}
        </div>
    </div>



</div>
{!! Form::submit('Envoyer', ['class' => 'btn btn-info pull-right']) !!}

{!! Form::close() !!}
@endsection


@section('footer_scripts')

@stop
