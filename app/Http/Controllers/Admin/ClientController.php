<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Client;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ClientController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $client = Client::orderBy('updated_at', 'desc')->paginate(50);

        return view('admin.client.index', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Client::create($request->all());

        Session::flash('flash_message', 'Client added!');

        return redirect('admin/client');
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
        $client = Client::findOrFail($id);

        return view('admin.client.show', compact('client'));
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
        $client = Client::findOrFail($id);

        return view('admin.client.edit', compact('client'));
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
        
        $client = Client::findOrFail($id);
        $client->update($request->all());

        Session::flash('flash_message', 'Client updated!');

        return redirect('admin/client');
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
        Client::destroy($id);

        Session::flash('flash_message', 'Client deleted!');

        return redirect('admin/client');
    }



    public function seed(Request $request)
    {

        if ($request->ajax()) {
            if ($request->q) {
                $clients = Client::where('firm_name','LIKE', '%'.$request->q.'%')->orwhere('last_name','LIKE', '%'.$request->q.'%')->get();
            }else {
                $clients = Client::all();
            }
            
            $list = array();
            foreach ($clients as $key => $value) {
                $list[$key]['id'] = $value->id;
                $list[$key]['text'] = '#'.$value->id.' '.$value->last_name.' -  '.strtoupper($value->firm_name); 
            }
            return $list; 
        }
           // return Client::select('id',  \DB::raw('CONCAT(firm_name, " ", first_name, " ", last_name) as full_name'))->pluck('full_name', 'id');
    }

}
