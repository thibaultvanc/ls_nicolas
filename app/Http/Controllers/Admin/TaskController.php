<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Task;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class TaskController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $task = Task::orderBy('updated_at','desc')->paginate(50);

        return view('admin.task.index', compact('task'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $mode = 'create';
        return view('admin.task.edit', compact('mode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Task::create($request->all());

        Session::flash('flash_message', 'Task added!');

        return redirect('admin/task');
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
        $task = Task::findOrFail($id);

        return view('admin.task.show', compact('task'));
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
        $task = Task::findOrFail($id);
        $mode = 'edit';    

        return view('admin.task.edit', compact('task', 'mode'));
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
        
        $task = Task::findOrFail($id);
        $task->update($request->all());

        Session::flash('flash_message', 'Task updated!');

        return redirect('admin/task');
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
        Task::destroy($id);

        Session::flash('flash_message', 'Task deleted!');

        return redirect('admin/task');
    }

}
