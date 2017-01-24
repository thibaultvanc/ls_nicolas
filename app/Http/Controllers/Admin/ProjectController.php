<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Project;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ProjectController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $project = Project::orderBy('updated_at','desc')->paginate(50);

        return view('admin.project.index', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Project::create($request->all());

        Session::flash('flash_message', 'Project added!');

        return redirect('admin/project');
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
        $project = Project::findOrFail($id);

        return view('admin.project.show', compact('project'));
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
        $project = Project::findOrFail($id);

        return view('admin.project.edit', compact('project'));
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
        
        $project = Project::findOrFail($id);
        $project->update($request->all());

        Session::flash('flash_message', 'Project updated!');

        return redirect('admin/project');
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
        Project::destroy($id);

        Session::flash('flash_message', 'Project deleted!');

        return redirect('admin/project');
    }

}
