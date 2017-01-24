<?php
use App\Field;
use App\Facture;
use App\Record;
use Illuminate\Http\Request;



/*
test pour flandrin notifications
*/
Route::post('office/notifications', function(){
	Log::error(Input::all());
/*
	//https://laravel.com/docs/5.1/events
	handle($sourceEntity){
		$entityTarget = $WSClient->getEntity($sourceEntity->email);
		if ($entityTarget->isDifferentFrom($sourceEntity)){
			$entityTarget->updateFrom($sourceEntity);
			$WSClient->update($entityTarget);
		}
	}
	 Event::fire(new PodcastWasPurchased($podcast));
	}
	*/
	return Input::get('validationtoken');
});




Route::get('/', ['as'=>'home', 'uses'=>'WebController@home'] );
//Route::get('/agence_developpement_web_06/competence_web', ['as'=>'method', 'uses'=>'WebController@knowledge'] );
Route::auth();
Route::get('/agence_developpement_web_06/competence_web/{knowledge_slug?}', ['as'=>'knowledge', 'uses'=>'WebController@knowledge'] );
Route::get('/agence_developpement_web_06/method', ['as'=>'method', 'uses'=>'WebController@method'] );
Route::get('/agence_developpement_web_06/porfolio', ['as'=>'portfolio', 'uses'=>'WebController@portfolio'] );
Route::get('/agence_developpement_web_06/porfolio_item/{creation_id}', ['as'=>'portfolio_item', 'uses'=>'WebController@portfolio_item'] );
Route::get('/mentions-legales', ['as'=>'mentions-legales', 'uses'=>'WebController@mentions_legales'] );

Route::group(['middleware' => ['Web']], function () {
	Route::get('/agence_developpement_web_06/contact', ['as'=>'contact', 'uses'=>'WebController@get_contact'] );
	Route::post('/agence_developpement_web_06/contact', ['as'=>'post_contact', 'uses'=>'WebController@post_contact'] );
});



Route::get('/uploads/{file}', [ 'uses'=>'WebController@uploads'] );



Route::group(['prefix'=>'admin','middleware' => ['admin']], function () {
	Route::auth();
    Route::get('/', 'AdminController@index');
	Route::resource('client', 'Admin\\ClientController');
    Route::get('/ajax_seed_client', ['as'=>'ajax_seed_client','uses'=>'Admin\ClientController@seed']);

});





Route::group(['middleware' => 'Web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});





Route::group(['middleware' => ['admin']], function () {
	Route::get('admin/todos', function(){

		echo "<h2>le fichier est : routes</h2>";
		$todos = [

					"dans client : ajouter btn new devis" ,
					"envoi par email avec visualisation/edition du message" ,
					"édition du devis" ,
					"tinyMCE => insert image, viw source, ...etc...",
					"faire en sorte que ce soit le client qui saisisse ses données et génére/pre-remplisse la propal",
					"Propal : ajouter étape developpement",
				];
		var_dump($todos);
	});

	Route::get('admin/devis_select', ['as'=>'admin.devis_select', 'uses'=>'AdminController@devis_select']);

	Route::get('admin/dev_cheatsheet_home', ['as'=>'dev_cheatsheet_home', 'uses'=>'AdminController@dev_cheatsheet_home']);
	Route::get('admin/dev_cheatsheet_laravel', ['as'=>'dev_cheatsheet_laravel', 'uses'=>'AdminController@dev_cheatsheet_laravel']);
	Route::get('admin/dev_cheatsheet_git', ['as'=>'dev_cheatsheet_git', 'uses'=>'AdminController@dev_cheatsheet_git']);
	Route::get('admin/dev_cheatsheet_javascript', ['as'=>'dev_cheatsheet_javascript', 'uses'=>'AdminController@dev_cheatsheet_javascript']);
	Route::get('admin/dev_cheatsheet_HTML_CSS', ['as'=>'dev_cheatsheet_HTML_CSS', 'uses'=>'AdminController@dev_cheatsheet_HTML_CSS']);
	Route::get('admin/dev_cheatsheet_Vue', ['as'=>'dev_cheatsheet_Vue', 'uses'=>'AdminController@dev_cheatsheet_Vue']);
	//Route::get('admin/dev_cheatsheet_bootstrapping', ['as'=>'dev_cheatsheet_bootstrapping', 'uses'=>'AdminController@dev_cheatsheet_bootstrapping']);
	Route::get('admin/documentation_bootstrapping', ['as'=>'documentation_bootstrapping', 'uses'=>'AdminController@documentation_bootstrapping']);



	Route::get('admin/programing_tools/home', ['as'=>'programing_tools_home', 'uses'=>'AdminController@programing_tools_home']);
	Route::get('admin/programing_tools/boostrapping', ['as'=>'programing_tools.boostrapping', 'uses'=>'AdminController@tools_boostrapping']);
	Route::get('admin/programing_tools/json2vuejs', ['as'=>'programing_tools.json2vuejs', 'uses'=>'AdminController@tools_json2vuejs']);
	Route::post('admin/programing_tools/json2vuejs', ['as'=>'programing_tools.post_json2vuejs', 'uses'=>'AdminController@post_tools_json2vuejs']);


	Route::resource('admin/user', 'Admin\\UserController');
	Route::resource('admin/project', 'Admin\\ProjectController');
	//Route::resource('admin/contact', 'Admin\\ContactController'); //////////////a supprimer
	Route::resource('admin/devis', 'Admin\\DevisController');
	Route::resource('admin/facture', 'Admin\\FactureController');
	Route::resource('admin/pointage', 'Admin\\PointageController');

	Route::get('admin/devis/{id}/pdf_devis', ['as'=>'pdf_devis', 'uses'=>'Admin\DevisController@pdf_devis'] );
	Route::get('admin/devis/{id}/pdf_dossier_interne', ['as'=>'pdf_dossier_interne', 'uses'=>'Admin\DevisController@pdf_dossier_interne'] );
	Route::get('admin/devis/{id}/pdf_propal', ['as'=>'pdf_propal', 'uses'=>'Admin\DevisController@pdf_propal'] );
	Route::get('admin/devis/{devis}/add_document', ['as'=>'add.devis.document', 'uses'=>'Admin\DevisController@add_document'] );
	Route::get('admin/devis/{devis}/pointages', ['as'=>'devis.pointages', 'uses'=>'Admin\DevisController@edit'] );

	Route::get('admin/devis/{devis}/model_management', ['as'=>'admin.model_management', 'uses'=>'Admin\DevisController@model_management'] );
	Route::get('admin/devis/{devis}/run_bootstrapping', ['as'=>'admin.run_bootstrapping', 'uses'=>'Admin\DevisController@run_bootstrapping'] );
	Route::get('admin/devis/{devis}/tables', ['as'=>'devis.table', 'uses'=>'Admin\TableController@list_for_devis'] );
	Route::get('admin/devis/{devis}/send_confidentiality', ['as'=>'admin.devis.send_confidentiality', 'uses'=>'Admin\DevisController@send_confidentiality'] );



	Route::group(['prefix' => 'admin/devis/{devis}/'], function () {
		Route::resource('admin/table', 'Admin\\TableController');
		Route::resource('tables.fields', 'Admin\\FieldController');
		Route::delete('delete-relationship/{from_field_id}/{to_field_id}', ['as'=>'admin.devis.{devis}.relation.delete', 'uses'=>'Admin\TableController@delete_relation'] );
		Route::get('edit_table_relation/{from_field_id}/{to_field_id}', ['as'=>'admin.devis.{devis}.tables.edit_table_relation', 'uses'=>'Admin\TableController@edit_table_relation'] );
		Route::post('table/{table}/store_table_relation', ['as'=>'admin.devis.{devis}.tables.store_table_relation', 'uses'=>'Admin\TableController@store_table_relation'] );
		Route::post('update_table_relation/{from_field_id}/{to_field_id}', ['as'=>'admin.devis.{devis}.relation.update', 'uses'=>'Admin\TableController@update_table_relation'] );
		Route::any('post_update_belongs_to_many/{from_field_id}/{to_field_id}', ['as'=>'admin.devis.{devis}.relation.btm.update', 'uses'=>'Admin\RelationShipController@postUpdateBelongsToMany'] );


		Route::get('table/{table}/export_csv', ['as'=>'admin.devis.{devis}.tables.export_csv', 'uses'=>'Admin\TableController@export_csv'] );
		Route::get('table/{table}/addFixedRecords', ['as'=>'admin.devis.{devis}.tables.addFixedRecords', 'uses'=>'Admin\TableController@addFixedRecords'] );
		Route::get('table/{table}/editTableData', ['as'=>'admin.devis.{devis}.tables.editTableData', 'uses'=>'Admin\TableController@editTableData'] );


		Route::get('add_table_relation/{from_field_id}', ['as'=>'admin.devis.{devis}.relation.add_table_relation', 'uses'=>'Admin\TableController@add_table_relation'] );
		// Route::post('store_table_relation/{from_field_id}', ['as'=>'admin.devis.{devis}.relation.store', 'uses'=>'Admin\TableController@store_table_relation'] );


		Route::get('generate_bootstrapping_form', ['as'=>'admin.devis.{devis}.generate_bootstrapping_form', 'uses'=>'Admin\TableController@generate_bootstrapping_form'] );
		Route::post('generate_bootstrapping', ['as'=>'admin.devis.{devis}.generate_bootstrapping', 'uses'=>'Admin\TableController@generate_bootstrapping'] );



		// Route::resource('admin/field', 'Admin\\FieldController');
		// Route::get('admin/table/{table}/fields', 'Admin\\tableController@fields' );

	});

});


Route::group(['middleware' => ['admin']], function () {

});






/***********************************************************************************/
/***********************************************************************************
//api for CRUD & vue
Route::get('api/fields/', function(){
	return Field::orderBy('id','desc')->get();
});
*/
Route::post('api/fields/create', function(){
	return Field::create(Request::all());
});

Route::put('api/fields/{field}', function(App\Field $field){
	//dd($field,Request::all());
	if($field->update(Request::all())){
		return 'ok';
	};
});
 Route::delete('api/fields/{field}', function(App\Field $field){   // http://organit.app/api/table/1/fields
    	$field->delete();
    });



    Route::get('api/table/{table}/fields', function(App\Table $table){   // http://organit.app/api/table/1/fields

		// $field =  $table->fields()->get()->first();
		//
		//
		// dd('$field->',$field->load('relations')->get() );

		return $table->fields()->with('relations.table')->get();
    });





    Route::get('api/table/{table}/records', function(App\Table $table){   // http://organit.app/api/table/1/fields
		$class = $table->modelNamespaceClass();
		return $class::all();
    });
	Route::post('api/table/{table}/post_record', function(Request $request, App\Table $table){   // http://organit.app/api/table/1/fields
		$class = $table->modelNamespaceClass();
		return $class::create($request->all());
	});

	    Route::delete('api/table/{table}/delete_record/{record_id}', function(App\Table $table, $record_id){   // http://organit.app/api/table/1/fields
			$class = $table->modelNamespaceClass();
			$record = $class::find($record_id);
			//dd($record);
			$record->delete();
	    });

	    Route::put('api/table/{table}/update_record/{record_id}', function(Request $request, App\Table $table, $record_id){   // http://organit.app/api/table/1/fields
			// dd($request->all());
			$class = $table->modelNamespaceClass();
			$record = $class::find($record_id);
			$record->update($request->all());
			return $record;
	    });







    Route::get('api/table/{table}/fixedrecords', function(App\Table $table){   // http://organit.app/api/table/1/fields
		// return $table->raws;
		$rawList=collect();
		foreach ($table->raws as $raw) {
			$recordList=[];
			$recordList['raw_id']=$raw->id;
			foreach ($raw->records as $record) {
				$recordList[$record->field->name]=$record->value;
			}
			$rawList->push($recordList);
		}
		return $rawList;
    });


    Route::get('api/table/{table}/records', function(App\Table $table){   // http://organit.app/api/table/1/fields
		// return $table->raws;

		$toReturn = collect();
		foreach ($table->raws as $raw) {



			$records = $raw->records()->with(['field'])->get();

			// dd('$records',$records );


			$toReturn->push($records);

		}
		return $toReturn;
    });


    Route::post('api/table/{table}/post_fixed_record', function(Request $request, App\Table $table){   // http://organit.app/api/table/1/fields

		//add a Raw
		$raw = $table->raws()->create([]);

		//add records associated to the raw
		foreach ($request->all() as $label => $value) {
			$primary = $table->getPrimaries()->first()->name;
			$raw->records()->create([
				//'table_id'=>$table->id,
				'field_id'=>$table->fields->where('name', $label)->first()->$primary,
				'value'=>$value
			]);
		}

		$recordList=[];
		$recordList['raw_id']=$raw->id;
		foreach ($raw->records as $record) {
			$recordList[$record->field->name]=$record->value;
		}
		return $recordList;


    });
	Route::delete('api/table/{table}/delete_fixed_record/{raw_id}', function(App\Table $table, $raw_id){   // http://organit.app/api/table/1/fields
		$raw = \App\Raw::find($raw_id);
		$raw->records()->delete();
		$raw->delete();
	});
	Route::put('api/table/{table}/update_fixed_record/{raw_id}', function(Request $request, App\Table $table, $raw_id){   // http://organit.app/api/table/1/fields
		$raw = \App\Raw::find($raw_id);
		// dd($request->all());
		foreach($request->all() as $label=>$value){
			if ($label == 'raw_id') { continue; }
			// echo "<h1>Table : ".$table->id." -- row".$raw->id."</h1>";
			// echo $label.'<br><br>';
			$field = Field::where('table_id', $table->id)->where('name',$label)->first();
			$record = Record::where('raw_id', $raw->id)->where('field_id', $field->id);
			// echo 'field : '.$field->id. '-' .$field->name;
			// echo 'record : '.$record->id;
			// echo "<hr>";
			// echo "<hr>";
			$record->update(['value'=>$value]);
		}

		$recordList=[];
		$recordList['raw_id']=$raw->id;
		foreach ($raw->records as $record) {
			$recordList[$record->field->name]=$record->value;
		}
		return $recordList;

	});


    /*
    Route::delete('api/table/{table}/fields/{field}', function(App\Table $table, Field $field){   // http://organit.app/api/table/1/fields
    	$field->delete();
    });
*/



/***********************************************************************************/
/***********************************************************************************/


Route::group(['middleware' => ['admin']], function () {
	Route::resource('admin/process', 'Admin\\ProcessController');
	Route::resource('admin/{devis}/namespace', 'Admin\\NamespaceController');
	Route::resource('admin/process', 'Admin\\ProcessController');
	Route::resource('admin/task', 'Admin\\TaskController');
	// Route::resource('admin/pivotextrafield', 'Admin\\PivotExtraFieldController');
	Route::resource('admin/process', 'Admin\\ProcessController');
});











//api for CRUD & vue
Route::get('api/facture/', function(){
	return Facture::orderBy('id','desc')->get();
});

Route::post('api/facture/create', function(){
	return Facture::create(Request::all());
});

Route::put('api/facture/{facture}', function(Facture $facture){
	if($facture->update(Request::all())){
		return 'ok';
	};
});

Route::delete('api/facture/{facture}', function(Facture $facture){   // http://organit.app/api/table/1/factures
	$facture->delete();
});














Route::get('admin/generate_seeder', function(App\Table $table){

			$schema = \DB::getDoctrineSchemaManager();
			$tables = $schema->listTables();

			foreach ($tables as $key=>$table){
				echo "/////";
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				echo $table->getName();
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				echo "/////<br><br>";
					$rows = DB::table($table->getName())->get();
					foreach ($rows as $key => $row) {
						echo "DB::table('".$table->getName()."')->insert([";
						foreach (get_object_vars($row) as $label=>$value) {
							echo "'".$label."'=>'".$value."',";
						};
						echo "]);"."<br>";
					}
					echo "<br><br><br>";
					echo "<br><br>";
			}

});
