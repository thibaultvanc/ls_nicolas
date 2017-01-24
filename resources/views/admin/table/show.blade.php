@extends('layouts.admin')

@section('content')

<?php
/*
$s = '';
foreach($table->fields as $field){
    if ($s) $s .= ',';
    $s .= "'".$field->name."' : ''"; 
}
echo $s;
*/
?>

    <div class="row">
        <div class="col-md-6">
            <h1>{{$table->model}}</h1>
                            <b>ID.</b><br>
                            {{ $table->id }}<br><br>

                             <b>Devis Id</b><br>
                             {{ $table->devis_id }} <br><br>

                             <b>Name</b><br>
                            {{ $table->name }}<br><br>

                             <b>Model</b><br>
                            {{ $table->model }}<br><br>

            <h2>Relations</h2>      
            @foreach($table->related as $related_table)
                {{ $table->name }} ({{$table->model}})  > {{$related_table->pivot->type }} > {{$related_table->name }} ({{$related_table->model }})<br>
            @endforeach
        </div>
        <div class="col-md-6">
            
            <h1>Fields of {{$table->model}} : </h1>
           
            <crud table_id="{{$table->id}}" 
                  route_list="/api/table/{{$table->id}}/fields"
                  route_action="/api/fields"  
            ></crud>     

        </div>
    </div>
 




  

@endsection
  

@section('footer_scripts')

@stop