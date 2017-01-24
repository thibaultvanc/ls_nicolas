@extends('layouts.admin')

@section('content')



<a href="{{route('admin.devis.{devis}.tables.export_csv', [$devis->id, $table->id])}}">export_csv</a>

    <center>
        @if ($table->is_pivot)
          <i class="fa fa-random fa-2x"></i>
          <hr>
        @endif
        <h1>{!!$table->model<>''?$table->model:'<span class="label label-warning">No model</span>'!!}</h1>
        <i><h3>{{$table->name}}</h3></i>

    </center>
     {{-- &nbsp;<a href="{{route('admin.devis.{devis}.admin.table.create',[$devis->id])}}" class="pull-right btn btn-success btn-sm"><i class="fa fa-plus"></i> Add a table</a> --}}


    <a  href="{{route('admin.devis.{devis}.tables.fields.create',[$devis->id, $table->id])}}" class="pull-right btn btn-success btn-sm">Edit Fields</a>&nbsp;&nbsp;

    @if ($table->hasSeeder())

      <a  href="{{route('admin.devis.{devis}.tables.addFixedRecords',[$devis->id, $table->id])}}" class="pull-right btn btn-primary btn-sm">Edit Seeder</a>&nbsp;&nbsp;
    @else
      <a  href="{{route('admin.devis.{devis}.tables.addFixedRecords',[$devis->id, $table->id])}}" class="pull-right btn btn-success btn-sm">Add Seeder</a>&nbsp;&nbsp;
    @endif


    <a  href="{{route('admin.devis.{devis}.tables.editTableData',[$devis->id, $table->id])}}" class="pull-right btn btn-success btn-sm">Edit records</a>&nbsp;&nbsp;


<div class="row">
    @include('admin.field._aside')



    <div class="col-md-8">


        <div class="row">
            <div class="col-md-4">
                @foreach($table->relationship() as $relation)
                    @if(in_array($relation['laravel_name'] , ['MorphedByMany', 'belongsTo']))
                        <li class="list-group-item">
                            <b>{{$relation['laravel_name']}}</b>
                            <a href="{{route('admin.devis.{devis}.admin.table.edit', [$devis->id, $relation['to_model_id']])}}">
                                {{$relation['to_model']}}
                            </a>
                        </li>
                    @endif
                @endforeach
            </div>
            <div class="col-md-4 well">
                @if($mode == 'create')
                    {!! Form::open(['url' => 'admin/table', 'class' => 'form-horizontal']) !!}
                @elseif($mode == 'edit')
                    {!! Form::model($table, [
                        'method' => 'PATCH',
                        'route' => ['admin.devis.{devis}.admin.table.update',$devis->id ,$table->id],
                        'class' => 'form-horizontal'
                    ]) !!}
                @endif

                @include('admin/table._form')


                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                {!! Form::submit('Envoyer', ['class' => 'btn btn-info pull-right']) !!}

            {!! Form::close() !!}
            </div>
            <div class="col-md-4">
                <ul class="list-group">
                @foreach($table->relationship() as $relation)
                    @if(in_array($relation['laravel_name'] , ['hasMany', 'MorphToMany', 'belongsToMany']))
                        <li class="list-group-item">
                            <b>{{$relation['laravel_name']}}</b>
                            <a href="{{route('admin.devis.{devis}.admin.table.edit', [$devis->id, $relation['to_model_id']])}}">
                                {{$relation['to_model']}}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
            </div>
        </div>



        @if($mode == 'edit')
            {!! Form::open(['route' => ['admin.devis.{devis}.tables.store_table_relation',$devis->id, $table->id], 'files' => false ,'class' => 'form-horizontal ']) !!}

            <input type="hidden" name="devis_id" value="{{$devis->id}}">

            <u><h5>Add relationships</h5></u>


            <h4>{{$table->model}}</h4>

            <select name="laravel_name" class="form-control">
                <option value=""></option>
                <option value="hasMany">hasMany</option>
                <option value="belongsTo">belongsTo</option>
                <option value="belongsToMany">belongsToMany</option>
                {{-- <option value="hasOne">hasOne</option> --}}
                {{-- <option value="MorphedByMany">MorphedByMany</option> --}}
                {{-- <option value="MorphToMany">MorphToMany</option> --}}
            </select>

            <select name="to_model" class="form-control">
                <option value=""></option>
                @foreach($devis->tables()->get() as $table_a)
                    <option value="{{$table_a->id}}">{{$table_a->model}}</option>
                @endforeach
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
            {!! Form::submit('Envoyer', ['class' => 'btn btn-info pull-right']) !!}

        {!! Form::close() !!}
        <br>
        <hr>
        <br>







        {{-- {{dd($table->relationshipList())}} --}}


                            @forelse($table->relationshipList() as $related_fields)

                                <?php $tempBelongsToManyRelation = []; //used from filtering the model composed by himself?>
                                <?php $related_field_List = []; ?>
                                <div class="well">




                                    @foreach($related_fields->relations()->get() as $relation)
                                        @php
                                            $related_table = App\Field::find($relation->pivot->to_field_id)->table()->first();

                                            if (!in_array($related_table->id, $tempBelongsToManyRelation)) {
                                                $tempBelongsToManyRelation[] = $related_table->id;
                                                $showRelation = true;
                                            }
                                            else {
                                                $showRelation = false;

                                            }


                                        @endphp


                                        <?php $related_field_List[] = \App\Field::find($relation->pivot->from_field_id)->id; ?>

                                        {{-- {{Field::find($relation->pivot->from_field_id)->name}} --}}
                                        {{-- {{dd(\App\Field::find($relation->pivot->from_field_id)->name)}} --}}


                                        @if ($showRelation==true)
                                        <div class="row">
                                            <div class="col-md-2">

                                                @if(in_array($relation->pivot->laravel_name , ['MorphedByMany', 'belongsTo']))
                                                    <?php
                                                        $related_table = \App\Field::find($relation->pivot->to_field_id)->table()->first();
                                                     ?>
                                                    <a href="{{route('admin.devis.{devis}.admin.table.edit', [$devis->id, $related_table->id])}}">
                                                        <h3>{{$related_table->name }}</h3>
                                                    </a>
                                                    <a href="{{route('admin.devis.{devis}.tables.fields.edit', [$devis->id, $related_table->id, $relation->pivot->to_field_id])}}" >
                                                        {{$relation->pivot->to_field_id}} - {{\App\Field::find($relation->pivot->to_field_id)->name }} <span style="color:#ccc">(<i>{{App\Field::find($relation->pivot->to_field_id)->type->name }}</i>)</span>
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="col-md-2">
                                                <h3>&nbsp;</h3>
                                                @if(in_array($relation->pivot->laravel_name , ['MorphedByMany', 'belongsTo']))
                                                    <center>
                                                        <p>
                                                            <i class="fa fa-arrow-left"></i>

                                                            <a href="{{route('admin.devis.{devis}.tables.edit_table_relation', [$devis->id, $relation->pivot->from_field_id,$relation->pivot->to_field_id])}}"><b style="color:orangered">{{$relation->pivot->laravel_name}}</b></a>
                                                        </p>
                                                        <p>
                                                            <i class="fa fa-arrow-right"></i>

                                                            <a href="{{route('admin.devis.{devis}.tables.edit_table_relation', [$devis->id, $relation->pivot->from_field_id,$relation->pivot->to_field_id])}}"><b style="color:orangered">{{$relation->pivot->laravel_name=='belongsTo'?'hasMany':''}}</b></a>
                                                        </p>

                                                    </center>
                                                @endif
                                            </div>
                                            <div class="col-md-3">
                                                 {{-- <u><h3 style="color:purple">{{$table->name}}</h3></u> --}}


                                                 <u><b><h3>{{\App\Field::find($relation->pivot->from_field_id)->table()->first()->name }}</h3></b></u>
                                                 @if(in_array($relation->pivot->laravel_name , ['MorphedByMany', 'belongsTo']))
                                                     {{-- <b>{{\App\Field::find($relation->pivot->from_field_id)->table()->first()->name }}</b><br> --}}
                                                     <i>{{\App\Field::find($relation->pivot->from_field_id)->name }}</i>
                                                 @endif
                                            </div>
                                            <div class="col-md-2">

                                                <h3>&nbsp;</h3>
                                                @if(in_array($relation->pivot->laravel_name , ['hasMany', 'MorphToMany']))
                                                    <center>
                                                        <p>
                                                            <i class="fa fa-arrow-right"></i>
                                                            <a href="{{route('admin.devis.{devis}.tables.edit_table_relation', [$devis->id, $relation->pivot->from_field_id,$relation->pivot->to_field_id])}}">
                                                                <b style="color:orangered">{{$relation->pivot->laravel_name}}</b>
                                                            </a>
                                                        </p>
                                                        <p>
                                                            <i class="fa fa-arrow-left"></i>

                                                            <a href="{{route('admin.devis.{devis}.tables.edit_table_relation', [$devis->id, $relation->pivot->from_field_id,$relation->pivot->to_field_id])}}">
                                                                <b style="color:orangered">{{$relation->pivot->laravel_name=='hasMany'?'belongsTo':''}}</b>
                                                            </a>
                                                        </p>







                                                    </center>
                                                @elseif($relation->pivot->laravel_name == 'belongsToMany' )




                                                        <center>
                                                            <p>

                                                                <i class="fa fa-arrow-right"></i>
                                                                <a href="{{route('admin.devis.{devis}.tables.edit_table_relation', [$devis->id, $relation->pivot->from_field_id,$relation->pivot->to_field_id])}}">
                                                                    <b style="color:orangered">{{$relation->pivot->laravel_name}}</b>
                                                                </a>
                                                            </p>
                                                            <p>
                                                                <?php
                                                                    //$related_table = App\Field::find($relation->pivot->to_field_id)->table()->first();
                                                                 ?>
                                                                {{-- {{dd(AppField::find($relation->pivot->from_field_id)->table_id)}} --}}

                                                                <a href="{{route('admin.devis.{devis}.admin.table.edit', [$devis->id, $related_table->id])}}" >
                                                                    <h4>{{$related_table->id }} - {{$related_table->name }}</h4>
                                                                </a>
                                                                {{-- {{dd($related_table->fields)}} --}}
                                                                <ul>
                                                                    @forelse($related_table->fields as $related_table)
                                                                        <li>{{$related_table->id}} - {{$related_table->name}}</li>
                                                                    @empty
                                                                        No fields yet
                                                                    @endforelse
                                                                </ul>
                                                            </p>
                                                        </center>


                                                @endif

                                            </div>
                                            <div class="col-md-2">










                                                @if(isset($relation->pivot->laravel_name) && in_array($relation->pivot->laravel_name , ['hasMany', 'MorphToMany' ]))
                                                    <?php
                                                        $related_table = \App\Field::find($relation->pivot->to_field_id)->table()->first();
                                                     ?>
                                                    <a href="{{route('admin.devis.{devis}.admin.table.edit', [$devis->id, $related_table->id])}}"><h3>{{$related_table->name }}</h3></a>
                                                    {{$relation->pivot->to_field_id}} -
                                                    {{\App\Field::find($relation->pivot->to_field_id)->name }} <span style="color:#ccc">(<i>{{App\Field::find($relation->pivot->to_field_id)->type->name }}</i>)</span>


                                                    <b>{{\App\Field::find($relation->pivot->to_field_id)->table->first()->name }}</b><br>
                                                    <i>{{\App\Field::find($relation->pivot->to_field_id)->name }}</i>
                                                @elseif($relation->pivot->laravel_name == 'belongsToMany')
                                                    <?php
                                                    // dd(\App\Field::find($relation->pivot->on_field_id)->table->get());
                                                        $related_table = \App\Table::find($relation->pivot->to_model);
                                                        $related_field = \App\Field::find($relation->pivot->on_field_id);
                                                     ?>
                                                    <a href="{{route('admin.devis.{devis}.admin.table.edit', [$devis->id, $related_table->id])}}"><h3>{{$related_table->name }}</h3></a>
                                                    {{-- {{dd($related_fields->)}} --}}
                                                    {{$related_field->id}} -
                                                    {{$related_field->name }} <span style="color:#ccc">(<i>{{$related_field->type->name }}</i>)</span>

                                                @endif
                                            </div>
                                            <div class="col-md-1">

                                                {!! Form::open([
                                                    'method'=>'DELETE',
                                                    'route' => ['admin.devis.{devis}.relation.delete', $devis->id,$relation->pivot->from_field_id ,$relation->pivot->to_field_id],
                                                    'style' => 'display:inline'
                                                ]) !!}
                                                    {!! Form::submit('Delete relation', ['class' => 'btn btn-danger btn-xs']) !!}
                                                {!! Form::close() !!}


                                            </div>
                                        </div>
                                        @endif {{-- $showRelation==true --}}



                                    @endforeach



        <div class="row" >

            <div class="col-md-2"> </div>
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <a href="{{route('admin.devis.{devis}.tables.fields.edit', [$devis->id, $table->id, $related_fields->id])}}" style="color:grey">
                    {{$related_fields->id}} - {{$related_fields->name}}
                    @if(isset($related_fields->type))
                        <br><i>({{$related_fields->type->name}})</i>
                    @endif


                </a>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-1">

                {{-- @if(!$related_fields->has_relation()) --}}

                    <a href="{{route('admin.devis.{devis}.relation.add_table_relation', [$devis->id, $related_fields->id])}}" class="btn btn-default btn-xs"><i class="fa fa-plus"></i> relation</a>
                    {{-- <a href="{{route('admin.devis.{devis}.tables.fields.destroy', [$devis->id, $table->id, $field->id])}}"><i class="fa fa-times"></i></a> --}}
                    {!! Form::open([
                        'method'=>'DELETE',
                        'route' => ['admin.devis.{devis}.tables.fields.destroy', $devis->id, $table->id, $related_fields->id],
                        'style' => 'display:inline'
                        ]) !!}
                        {!! Form::submit('Delete field', ['class' => 'btn btn-danger btn-xs', 'onclick'=>'return confirm("delete")']) !!}
                        {!! Form::close() !!}
                {{-- @endif --}}
            </div>



                                </div>
                                </div>
                            @empty
                                No relation yet
                            @endforelse



        <div class="row well">

            <div class="row">
                <div class="col-md-2"> </div>
                <div class="col-md-2"></div>
                <div class="col-md-3">
                        <a href="{{route('admin.devis.{devis}.tables.fields.create',[$devis->id, $table->id])}}" class=""><i class="fa fa-plus"></i>Add a field </a>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-2"></div>
                <div class="col-md-1"></div>
            </div>
        </div>


        {!! Form::open(['method'=>'DELETE','route' => ['admin.devis.{devis}.admin.table.destroy', $devis->id , $table->id], 'style' => 'display:inline']) !!}

        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
    {!! Form::close() !!}



    </div>
</div>



@endif {{-- mode edit --}}






@endsection


@section('footer_scripts')
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.js')!!}
    <script>
    new Vue({
        el: 'body',
        ready(){

            //alert('hello vuejs')
        },
        data: {
            showAddForm:false,
            test:'test',
            tableList:[],
            fieldList_inFrom:[],
            fieldList_inTo:[],
            relationTypeList:[
                {'laravel_name': ''},
                {'laravel_name': 'hasMany'},
                {'laravel_name': 'belongsTo'},
                {'laravel_name': 'belongsToMany'},
                {'laravel_name': 'hasOne'},
                {'laravel_name': 'MorphedByMany'},
                {'laravel_name': 'MorphToMany'},
            ],
            relationship:{},
            relationshipList:[]
        }
        })
    </script>
@endsection
