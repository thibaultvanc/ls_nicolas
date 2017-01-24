<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pointage;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class PointageController extends Controller
{

    
    public function index()
    {
        $pointage = Pointage::orderBy('updated_at', 'desc')->paginate(50);

        return view('admin.pointage.index', compact('pointage'));
    }

   


    public function create()
    {
        $mode = 'create';
        return view('admin.pointage.edit', compact('mode'));
    }

  


    public function store(Request $request)
    {
        
        Pointage::create($request->all());

        Session::flash('flash_message', 'Pointage added!');

        return redirect('admin/pointage');
    }

 



    public function show($id)
    {
        $pointage = Pointage::findOrFail($id);

        return view('admin.pointage.show', compact('pointage'));
    }





    public function edit($id)
    {
        $pointage = Pointage::findOrFail($id);
        $mode = 'edit';    

        return view('admin.pointage.edit', compact('pointage', 'mode'));
    }




    public function update($id, Request $request)
    {
        
        $pointage = Pointage::findOrFail($id);
        $pointage->update($request->all());

        Session::flash('flash_message', 'Pointage updated!');

        return redirect('admin/pointage');
    }

   


   
    public function destroy($id)
    {
        Pointage::destroy($id);

        Session::flash('flash_message', 'Pointage deleted!');

        return redirect('admin/pointage');
    }

}
