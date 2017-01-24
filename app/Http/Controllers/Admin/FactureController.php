<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Facture;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use App\Project;
use App\Contact;
use App\Client;
use DB;

class FactureController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $facture = Facture::orderBy('updated_at','desc')->paginate(50);

        return view('admin.facture.index', compact('facture'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $facture=null;
        /*Lists*/
        $projects = Project::lists('name', 'id');
        $selectedProjects = null;
        $contacts = Contact::select('id',  DB::raw('CONCAT(first_name, " ", last_name) as full_name'))->orderBy('last_name', 'asc')->lists('full_name', 'id');
        $clients = Client::lists('email', 'id');
        
    

        return view('admin.facture.create', compact('facture','projects', 'selectedProjects', 'contacts', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $facture = Facture::create($request->all());

        $facture->projects()->sync($request->projectList);


        Session::flash('flash_message', 'Facture added!');

        return redirect('admin/facture');
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
        $facture = Facture::findOrFail($id);

        return view('admin.facture.show', compact('facture'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $facture = Facture::findOrFail($id);

        /*Lists*/
        $projects = Project::lists('name', 'id');
        $selectedProjects = $facture->projects->lists('id')->flatten()->all();

        $contacts = Contact::select('id',  DB::raw('CONCAT(first_name, " ", last_name) as full_name'))->orderBy('last_name', 'asc')->lists('full_name', 'id');
        $clients = Client::lists('email', 'id');

        //dd($selectedProjects);
        return view('admin.facture.edit', compact('facture', 'projects', 'selectedProjects', 'contacts', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $facture = Facture::findOrFail($id);

        /*traitement checkbox*/
        if (!isset($request->is_registered)) {
            $facture->is_registered = 0;
        }/*traitement checkbox*/
        if (!isset($request->is_fully_paid)) {
            $facture->is_fully_paid = 0;
        }

        $facture->update($request->all());

        $facture->projects()->sync($request->projectList);

        Session::flash('flash_message', 'Facture updated!');

        return redirect('admin/facture');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        Facture::destroy($id);

        Session::flash('flash_message', 'Facture deleted!');

        return redirect('admin/facture');
    }

}
