@extends('layouts.admin')

@section('content')
	<style>
		h3{
			margin-left: 10px
		}

		h4{
			margin-left: 20px

		}

		.i4{
			margin-left: 60px;color: grey;

		}

	</style>

note : pour un nouveau projet :
<div class="list-group">
  <a href="#" class="list-group-item">Config du serveur FORGe</a>
  <a href="#" class="list-group-item">Config de la BDD</a>
  <a href="#" class="list-group-item">

  <p>Préparer les dépendances composer</p>

- "doctrine/dbal": "v2.5.4",<br>
- "appzcoder/crud-generator": "^1.0",<br>
- "laravelcollective/html": "~5.0",<br>
- "barryvdh/laravel-debugbar": "^2.2",<br>
- "laravel/socialite": "^2.0",<br>
- "andywer/js-localization": "dev-laravel-5",<br>
- "jenssegers/date": "^3.1",<br>
- "laravel/cashier": "~5.0",<br>
- "barryvdh/laravel-ide-helper": "^2.1",<br>

<p>Préparer les services providers dans config/app</p>




  <a href="#" class="list-group-item">npm install</a>
  <a href="#" class="list-group-item">npm install --save vue-ui ()</a>

</div>


	@foreach($tables as $table)
		<h2><u>{{$table->name}}</u></h2>
		<div style="margin-bottom: 25px"></div>

		<h4>Migrations</h4>
		<div class="i4">
			<code>
			@foreach($table->fields as $field)
					{{$field->name}}:{{$field->type}},
			@endforeach
			</code>
		</div>


		<h4>Crud</h4>
		<div class="i4">
			<code>
			php artisan crud:generate {{$table->model}} --fields="
			@foreach($table->fields as $field)
					{{$field->name}}:{{$field->type}},
			@endforeach
			" --namespace Admin --route-group=admin --view-path=admin</code>
		</div>


		<h4>migration</h4>
		<div class="i4">
			<code>
			php artisan make:migration:schema create
			@foreach($table->fields as $field)
					{{$field->name}}:{{$field->type}},
			@endforeach
			--model=false
			</code>
		</div>


		<h4>migration extended -> pivot</h4>
		<div class="i4">
			@if($table->related)
				@foreach($table->related as $related_table)
					@if($related_table->pivot->type == 'belongsToMany')
						{{$table->model}} belongsToMany {{$related_table->model }}
					@endif
				    {{ $table->name }} ()  > {{$related_table->pivot->type }} > {{$related_table->name }} ({{$related_table->model }})<br>
				@endforeach
			@endif
			<code>
			php artisan make:migration:pivot #tags posts
			@foreach($table->fields as $field)
					{{$field->name}}:{{$field->type}},
			@endforeach
			</code>
		</div>

		<h4>Models</h4>
		<div class="i4">
				@foreach($table->related as $related_table)
					@if($related_table->pivot->type == 'belongsToMany')
						<u><b>Pivot</b></u> :{{$table->model}} belongsToMany {{$related_table->model }}<br>
							--A completer -- shell_install.blade.php
						<?php
						/*
						$pivots = DB::select('select * from pivotextrafields p, relation_tables t  where p.table_id='.$related_table->pivot->table_id.'
																			and p.target_table_id='.$related_table->pivot->target_table_id);
						dd($pivots);
						*/
						?>
						<pre>
public function {{$related_table->model}}<b>s</b>()
{
    return $this->belongsTo('App\{{$related_table->model}}')
			->->withPivot({{--$pivots--}});
    		->withTimestamps();
}						</pre>


					@elseif($related_table->pivot->type == 'hasMany')
						{{$table->model}} hasMany {{$related_table->model }}<br>
						<pre>
public function {{$related_table->model}}<b>s</b>()
{
    return $this->hasMany('App\{{$related_table->model}}');
}						</pre>


					@elseif($related_table->pivot->type == 'hasOne')
						{{$table->model}} hasOne {{$related_table->model }}<br>
						<pre>
public function {{$related_table->model}}()
{
    return $this->hasOne('App\{{$related_table->model}}');
}						</pre>


					@elseif($related_table->pivot->type == 'belongsTo')
						{{$table->model}} belongsTo {{$related_table->model }}<br>
						<pre>
public function {{$related_table->model}}()
{
    return $this->belongsTo('App\{{$related_table->model}}');
}						</pre>
					@endif

				@endforeach

		</div>





		<hr>
		<div style="margin-bottom: 75px"></div>
	@endforeach
@stop
