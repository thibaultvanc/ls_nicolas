<?php
namespace App\Http\Controllers\Admin;

use DB;
use View;
use File;
use Flash;
use App\Field;
use App\Table;
use App\Relationship;
use App\Devis;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TableController extends Controller
{




    public function index($devis)
    {

        $table = Table::orderBy('updated_at','desc')->paginate(50);

        return view('admin.table.index', compact('table'));
    }




    public function list_for_devis($devis_id)
    {
        $devis = Devis::find($devis_id);
        $table = Table::where('devis_id',$devis_id)->orderBy('updated_at','desc')->paginate(50);

        return view('admin.table.index', compact('devis','table'));
    }




    public function create(Devis $devis)
    {
        $mode = 'create';
        //$tableList = $devis->tables()->get();
        $tableList = $devis->with('tables')->first()->tables;
        $namespaceList = $devis->namespaces()->lists('name', 'id');
        return view('admin.table.create', compact('devis','mode','namespaceList', 'tableList'));
    }





    public function store(Request $request, Devis $devis)
    {
        // dd($devis);
        $request->request->add(['name'=>snake_case(str_plural($request->model))]);
        $table = $devis->tables()->create($request->all());

        $table->fields()->create(['name'=>'id','is_unique'=>true,'is_primary'=>1, 'is_on_index_view'=>true,'is_on_foreign_label'=>false, 'field_type_id'=>1, 'is_incrementable'=>true]);
        $table->fields()->create(['name'=>'name','is_unique'=>true,'is_required'=>1, 'is_on_index_view'=>true,'is_on_foreign_label'=>true, 'field_type_id'=>2]);

        Flash::success('Table added successfully');
        return \Redirect::route('admin.devis.{devis}.admin.table.edit',[$request->devis_id, $table->id])->with('devis',$devis);
    }






    public function show($devis_id, $table_id)
    {
        $table = Table::findOrFail($table_id);

        return view('admin.table.show', compact('table'));
    }






    public function edit(Devis $devis,$id)
    {
          // dd($devis);
        $table = Table::findOrFail($id);

        $relations = $table->relationship();
        // $tableList = $devis->tables()->get();
        $tableList = $devis->tables()->orderBy('name')->get();





        $mode = 'edit';
        $namespaceList = $devis->namespaces()->lists('name', 'id');
        return view('admin.table.edit', compact('devis','table', 'mode', 'namespaceList', 'relations', 'tableList'));
    }





    public function update($devis_id, $table_id, Request $request)
    {



        if (!$request->has('name')) {
            $request->request->add(['name'=>snake_case(str_plural($request->model))]);
        }
        // dd($request->all());

        $request->model=ucfirst($request->model);
        $request->namespace=ucfirst($request->namespace);

        $table = Table::findOrFail($table_id);
        $table->update($request->all());
        // Session::flash('flash_message', '');
        Flash::success('Table updated!');

        if (isset($table->fields()->first()->id)) {
            return \Redirect::route('admin.devis.{devis}.tables.fields.edit',[$devis_id, $table->id,$table->fields()->first()->id ]);
            // return redirect()->back();
        }
        else{
            return \Redirect::route('admin.devis.{devis}.tables.fields.create',[$devis_id, $table->id ]);
        }


        //return redirect()->action('Admin\\TableController@list_for_devis', [$request->devis_id]);
    }





    public function destroy($devis_id, $table_id)
    {


        Table::destroy($table_id);

        \Session::flash('flash_message', 'Table deleted!');

        // return redirect()->action('Admin\\TableController@list_for_devis', [$devis_id]);
        return redirect()->back();
    }


    public function fields(Table $table)
    {
        $field = $table->fields()->paginate(50);

        return view('admin.field.index', compact('field'));
    }







    public function add_table_relation(Devis $devis, $field_id)
    {

        $from_field = Field::find($field_id); //keep
        $table = $from_field->table; //keep
        // $relations = $from_field->table->relationship();


        return View::make('admin.table.add_table_relation', compact('devis', 'from_field', 'table'));
    }


    public function store_table_relation(Request $request ,Devis $devis,Table $table)
    {

        $model = $table;
        $toModel = Table::find($request->to_model);



        if ( ! $model->createTableRelation($request, $table, $toModel) ) {

            return redirect()->route('admin.devis.{devis}.admin.table.edit', [$devis->id, $table->id]) ;
        }
        else {
            Flash::error('#54598 ERROR ');
        }
    }


    public function edit_table_relation(Devis $devis,$from_field_id, $to_field_id)
    {



        $from_field = Field::find($from_field_id);
        $to_field = Field::find($to_field_id);

        $relationName =   $from_field->relations()->where('to_field_id',$to_field->id)->first()->pivot->laravel_name;


        if ($relationName == 'belongsToMany') {


            $relation1 = Relationship::with('fromField', 'fromField.table', 'toField','toField.table' ,'toModel', 'onField','onField.table', 'pivotTable')
                                        ->where('from_field_id',$from_field->id)->where('to_field_id',$to_field->id)
                                        ->firstOrFail();




            $relation2 = Relationship::with('fromField', 'fromField.table', 'toField','toField.table' ,'toModel', 'onField','onField.table', 'pivotTable')
                                        ->where('from_field_id',$relation1->on_field_id)
                                        ->where('pivot_table_id', $relation1->pivot_table_id)
                                        ->firstOrFail();

            if ($relation1 == $relation2) { //belongstomany Same Table
                $relation2 = Relationship::with('fromField', 'fromField.table', 'toField','toField.table' ,'toModel', 'onField','onField.table', 'pivotTable')
                                            ->where('from_field_id',$relation1->on_field_id)
                                            ->where('to_field_id', '!=',$to_field->id )
                                            ->where('on_field_id', $relation1->on_field_id)
                                            ->where('pivot_table_id', $relation1->pivot_table_id)
                                            ->firstOrFail();


            }


            return View::make('admin.table.edit_belongs_to_many_relation', compact('devis', 'relation1', 'relation2'));
        }
        else {

            $inverseRelationName =   $to_field ->relations() ->where('to_field_id',$from_field ->id) ->first() ->pivot ->laravel_name;
            return View::make('admin.table.edit_table_relation', compact('devis', 'from_field', 'relationName','to_field', 'inverseRelationName'));
        }
    }


    public function update_table_relation(Request $request,Devis $devis,$from_field_id, $to_field_id)
    {
        $from_field = Field::find($from_field_id);
        $to_field = Field::find($to_field_id);
        $relationName =   $from_field->relations()->where('to_field_id',$to_field->id)->first()->pivot->laravel_name;
        $inverseRelation = $to_field->relations()->where('to_field_id',$from_field->id)->first()->pivot->laravel_name;


        //
        // if ($request->laravel_name == 'hasMany' && $request->inverse_laravel_name=='hasMany') {
        //     Flash::error('You cannot select hasMany as from an to relationhip');
        //     return redirect()->back();
        // }

        if ($request->laravel_name == 'hasMany' && $request->inverse_laravel_name=='belongsTo') {

        }else {
            Flash::error('it must be a hasMany <-> belongsTo');
            return redirect()->back();
        }
        if ($request->laravel_name == 'belongsTo' && $request->inverse_laravel_name=='hasMany') {

        }else {
            Flash::error('it must be a belongsTo <-> hasMany');
            return redirect()->back();
        }
        if ($request->laravel_name == 'belongsToMany' && $request->inverse_laravel_name=='belongsToMany') {

        }else {
            Flash::error('it must be a belongsToMany <-> belongsToMany');
            return redirect()->back();
        }


        // if ($request->laravel_name == 'hasMany') {
        //     if ($request->old_laravel_name == 'belongsTo' && $inverseRelation=='hasMany') {
        //
        //
        //
        //     }
        //     //check the inverse relation
        //
        //
        // }


        return redirect()->back();
    }






    public function delete_relation(Devis $devis, $from_field_id,$to_field_id)
    {
        $fromField = Field::find($from_field_id);
        $toField = Field::find($to_field_id);

        //dd($fromField->relations()->where('to_field_id', $to_field_id)->get());

        $laravel_name = $fromField->relations()->where('to_field_id', $to_field_id)->first()->pivot->laravel_name;

        if (in_array($laravel_name , ['belongsToMany'])) {
            $pivot_table_id = $fromField->relations()->where('to_field_id', $to_field_id)->first()->pivot->pivot_table_id;
        }

        $message= '';
        if ($fromField->relations()->detach($toField)) {


            if (in_array($laravel_name , ['belongsToMany'])) {
                //$pivot_table_id = $fromField->relations()->where('to_field_id', $to_field_id)->first()->pivot->pivot_table_id;
                 DB::table('relationships')->where('on_field_id', $from_field_id)->where('pivot_table_id',$pivot_table_id)->delete();

                 //suppression de la pivot_table
                 Table::find($pivot_table_id)->remove();
            }
            if (in_array($laravel_name , ['hasMany', 'belongsTo'])) {
                $pivot_table_id = $toField->relations()->detach($fromField);
            }




            $message.= 'relationhip has been removed';
            if( ! $fromField->is_primary ){
                // $fromField->delete();
                // $message.= 'the field <b>'.$fromField.'</b> has been removed. <br>';
            }
            if( ! $toField->is_primary ){
                // $toField->delete();
                // $message.= 'the field <b>'.$toField.'</b> has been removed. <br>';
            }
        }
        if ($message) {
            Flash::success($message);
        }else{
            Flash::error('relation not found. Probably already deleted.');
        }
        return redirect()->back();


    }

    public function generate_bootstrapping_form(Devis $devis)
    {
        // $devis->generate_bootstrapping();

        return view('admin.table.bootstrapping_form', compact('devis'));

        //return redirect()->route('admin.devis.edit',[$devis->id]);


    }


    public function generate_bootstrapping(Request $request, Devis $devis)
    {




        $response = $devis->generate_bootstrapping($request);

        Flash::success('bootstrapping Files successfully Generated in /uploads/'.$devis->id);

        if ($request->export_mode == 'zip') {
            // return \Response::download($response); // file damaged
        }

        else {
            dd('bootstrapping Files successfully Generated in /uploads/'.$devis->id);
            // return redirect()->back();
            # code...
        }
        // return \Response::download('/home/thibault/Code/organit/public/24_Picaflor_bootstrapping.zip');


        //return redirect()->route('admin.devis.edit',[$devis->id]);


    }

    public function export_csv(Devis $devis, Table $table)
    {
        //dd();
        \Excel::create($table->name, function($excel) use ($table) {
            $excel->sheet('Sheetname', function($sheet) use ($table) {


                $columns = DB::connection()
                          ->getDoctrineSchemaManager()
                          ->listTableColumns($table->tableName);

                $classname = $table->modelNamespaceClass();

                // $columns = collect($columns);
                //$data = $table->getColumns(); // As of PHP 5.3.0
                // $data = $classname::all(); // As of PHP 5.3.0
                $sheet->fromModel($columns);
            });
        })->download('csv');
    }


    public function addFixedRecords(Devis $devis, Table $table)
    {
        return View::make('admin.table.addFixedRecords', compact('devis', 'table'));
    }

    public function editTableData(Devis $devis, Table $table)
    {
        return View::make('admin.table.editTableData', compact('devis', 'table'));
    }


}
