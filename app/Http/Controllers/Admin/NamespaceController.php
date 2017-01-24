<?php
namespace App\Http\Controllers\Admin;

use Flash;
use Session;
use Validator;
use App\Devis;
use App\Table;
use App\_Namespace;
use App\Theme;
use Carbon\Carbon;
use App\NamespaceType;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class NamespaceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Devis $devis)
    {

        $themeList = Theme::all();
        $namespaceList = $devis->namespaces()->paginate(50);

        return view('admin.namespace.index', compact('themeList', 'namespaceList','devis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request, Devis $devis)
    {





      $themeList = Theme::lists('name', 'id');
        $mode='create';
        $namespace = new _Namespace;
        return view('admin.namespace.create', compact('mode', 'devis', 'namespace', 'themeList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request, Devis $devis)
    {

      $validator = Validator::make($request->all(), [
          'name' => 'required|not_in:public|max:255',
          'theme_id' => 'required',

      ]);

      if ($validator->fails()) {

            if ($request->name == 'public' || $request->name == 'Public') {
              dd('Namespace name can not be PUBLIC => remplace by web');
            }

            var_dump('errors in form', $validator->errors());
            die();

          return redirect()->back()
                      ->withErrors($validator)
                      ->withInput();
      }




        // $request->request->add(['devis_id', $devis->id]);
        //
        // dd($request->all());
        _Namespace::create($request->all());
        //dd('123');



         Session::flash('flash_message', 'Namespace added!');
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
        $namespace = _Namespace::findOrFail($id);
        $mode="edit";
        $tableList = $namespace->table()->lists('model','id');
        return view('admin.namespace.show', compact('namespace', 'mode', 'tableList'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit( Devis $devis ,$namespace_id)    {

        //$table = Table::findOrFail($table_id);
        $namespace = _Namespace::find($namespace_id);

        // dd($namespace);
        $mode='edit';
        $themeList = Theme::lists('name', 'id');

        //$firstNamespace =$devis->tables()->where('id', $table->id)->first()->namespaces->first();

        //$tableList = $devis->tables()->get();
        //$namespaceList = $table->namespaces()->get();
        //$namespaceTypeList = NamespaceType::all()->lists('name', 'id');
        //$fakerList = [];
        //$tableList = Table::lists('model');
        return view('admin.namespace.edit', compact('devis', 'namespace', 'themeList', 'mode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update(Request $request, Devis $devis, $namespace_id)
    {

        $namespace = _Namespace::findOrFail($namespace_id);

        $namespace->update($request->all());
        //


        Session::flash('flash_message', 'Namespace updated!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($devis,$space )
    {
      //dd($space);
      // dd(_Namespace::find(2));
        _Namespace::find($space)->delete();

        Session::flash('flash_message', 'Namespace deleted!');

        return redirect()->back();
    }

}
