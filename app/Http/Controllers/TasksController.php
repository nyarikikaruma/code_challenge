<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTasksRequest;
use App\Http\Requests\UpdateTasksRequest;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Tasks::all();
        return response()->json(
            $tasks
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTasksRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTasksRequest $request)
    {
        $task = Tasks::create([
            'name' => $request->name,
            'description' => $request->description,
            'due_date' =>$request->due_date,
            'status_id' =>$request->status_id
        ]);
        return response()->json([
            'Task created successfully.'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Tasks::find($id);
        return response()->json([
            $task
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTasksRequest  $request
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTasksRequest $request, $id)
    {
        $task = Tasks::find($id);
        $task->update([
            'name' => $request->name,
            'description' => $request->description,
            'due_date' =>$request->due_date,
            'status_id' =>$request->status_id
        ]);
        return response()->json([
            'Task updated successfully.'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Tasks::find($id);
        $task->delete();
        return response()->json([
            'Deleted successfully'
        ]);
    }
}
