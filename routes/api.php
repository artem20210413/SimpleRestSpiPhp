<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('issues', [\App\Http\Controllers\RestApi\IssuesController::class, 'all']);
Route::get('issues/{id}', [\App\Http\Controllers\RestApi\IssuesController::class, 'show']);
Route::post('issues', [\App\Http\Controllers\RestApi\IssuesController::class, 'create']);
Route::put('issues/{id}', [\App\Http\Controllers\RestApi\IssuesController::class, 'edit']);
Route::delete('issues/{id}', [\App\Http\Controllers\RestApi\IssuesController::class, 'delete']);
