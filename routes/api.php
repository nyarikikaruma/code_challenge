<?php

use App\Http\Controllers\StatusController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\UserTaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/status', [StatusController::class, 'index']);
Route::post('/status/create', [StatusController::class, 'store']);
Route::get('/status/{id}', [StatusController::class, 'show']);
Route::post('/status/update/{id}', [StatusController::class, 'update']);
Route::delete('/status/delete/{id}', [StatusController::class, 'destroy']);

Route::get('/task', [TasksController::class, 'index']);
Route::post('/task/create', [TasksController::class, 'store']);
Route::get('/task/{id}', [TasksController::class, 'show']);
Route::post('/task/update/{id}', [TasksController::class, 'update']);
Route::delete('/task/delete/{id}', [TasksController::class, 'destroy']);

Route::get('/user_task', [UserTaskController::class, 'index']);
Route::post('/user_task/create', [UserTaskController::class, 'store']);
Route::get('/user_task/{id}', [UserTaskController::class, 'show']);
Route::post('/user_task/update/{id}', [UserTaskController::class, 'update']);
Route::delete('/user_task/delete/{id}', [UserTaskController::class, 'destroy']);