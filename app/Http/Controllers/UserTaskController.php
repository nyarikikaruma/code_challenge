<?php

namespace App\Http\Controllers;

use App\Models\User_task;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUser_taskRequest;
use App\Http\Requests\UpdateUser_taskRequest;

class UserTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_tasks = User_task::with('task', 'user')->get();
        return response()->json(
            $user_tasks
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUser_taskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser_taskRequest $request)
    {
        $user_task = User_task::create([
            'user_id' => $request->user_id,
            'task_id' => $request->task_id,
            'due_date' => $request->due_task,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'remarks' => $request->remarks,
            'status_id' => $request->status_id
        ]);
        return response()->json([
            'User task created successfully'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User_task  $user_task
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user_task = User_task::find($id);
        return response()->json([
            $user_task
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUser_taskRequest  $request
     * @param  \App\Models\User_task  $user_task
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUser_taskRequest $request, $id)
    {
        $user_task = User_task::find($id);
            $user_task ->update([
            'user_id' => $request->user_id,
            'task_id' => $request->task_id,
            'due_date' => $request->due_task,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'remarks' => $request->remarks,
            'status_id' => $request->status_id
        ]);
        return response()->json([
            'User task updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User_task  $user_task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_task = User_task::find($id);
        $user_task->delete();
    }
}
