<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Process;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ProcessController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $process = Process::orderBy('updated_at','desc')->paginate(50);

        return view('admin.process.index', compact('process'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $mode = 'create';
        return view('admin.process.edit', compact('mode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Process::create($request->all());

        Session::flash('flash_message', 'Process added!');

        return redirect('admin/process');
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
        $process = Process::findOrFail($id);

        return view('admin.process.show', compact('process'));
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
        $process = Process::findOrFail($id);
        $mode = 'edit';    

        return view('admin.process.edit', compact('process', 'mode'));
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
        
        $process = Process::findOrFail($id);
        $process->update($request->all());

        Session::flash('flash_message', 'Process updated!');

        return redirect('admin/process');
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
        Process::destroy($id);

        Session::flash('flash_message', 'Process deleted!');

        return redirect('admin/process');
    }

}
