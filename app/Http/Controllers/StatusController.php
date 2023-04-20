<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStatusRequest;
use App\Http\Requests\UpdateStatusRequest;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = Status::all();
        return response()->json(
            $status
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStatusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStatusRequest $request)
    {
        $status = Status::create([
            'name' =>$request->name
        ]);
        return response()->json([
            'Status created'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $status = Status::find($id);
        return response()->json([
            $status
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStatusRequest  $request
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStatusRequest $request, $id)
    {
        $status = Status::find($id);
        $status->update([
            'name' => $request->name
        ]);
        return response()->json([
            'Status updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status= Status::find($id);
        $status->delete();
        return response()->json([
            'Status deleted'
        ]);
    }
}
