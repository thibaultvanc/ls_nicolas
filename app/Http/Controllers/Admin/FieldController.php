<?php
namespace App\Http\Controllers\Admin;

use Flash;
use Session;
use App\Devis;
use App\Table;
use App\Field;
use Carbon\Carbon;
use App\FieldType;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class FieldController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Devis $devis, $table_id)
    {
        //dd($devis->id);
        $table = Table::find($table_id);

        if (!$table) {
            //dd('cette table n\'existe pas');
            Flash::error('Cette table n\'existe pas');
            return redirect()->back();
        }

        $field = $table->fields()->orderBy('updated_at','desc')->paginate(50);
        $tableList = $devis->tables()->orderBy('name')->get();

        return view('admin.field.index', compact('field', 'devis', 'table', 'tableList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Devis $devis, $table_id)
    {
        $table = Table::find($table_id);
        $mode='create';
        $tableList = $devis->tables()->orderBy('name')->get();
        $fieldList = $table->fields()->get();
        $fieldTypeList = FieldType::all()->lists('name', 'id');
        $fakerList = [];
        $field = new Field;
        return view('admin.field.create', compact('mode', 'fieldList','tableList', 'devis', 'table','fieldTypeList','fakerList', 'field'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request, Devis $devis ,$table_id)
    {

         $table = Table::find($table_id);

         $table->fields()->create($request->all());
         Session::flash('flash_message', 'Field added!');
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $field = Field::findOrFail($id);
        $mode="edit";
        $tableList = $field->table()->lists('model','id');
        return view('admin.field.show', compact('field', 'mode', 'tableList'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit( Devis $devis ,$table_id ,$field_id)
    {

        $table = Table::findOrFail($table_id);
        $field = Field::findOrFail($field_id);



        $firstField =$devis->tables()->where('id', $table->id)->first()->fields->first();

        $tableList = $devis->tables()->orderBy('name')->get();
        $fieldList = $table->fields()->get();
        $fieldTypeList = FieldType::all()->lists('name', 'id');
        $fakerList = [];
        //$tableList = Table::lists('model');
        return view('admin.field.edit', compact('field', 'tableList', 'devis', 'table', 'fieldList', 'firstField', 'fieldTypeList','fakerList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update(Request $request, Devis $devis, $table_id, $field_id)
    {

        $field = Field::findOrFail($field_id);

        $field->update($request->all());
        //


        Session::flash('flash_message', 'Field updated!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy(Devis $devis, Table $tables, Field $fields )
    {
        $table = $tables;
        $field = $fields;

        $field->delete();

        Session::flash('flash_message', 'Field deleted!');

        return redirect()->back();
    }

}
