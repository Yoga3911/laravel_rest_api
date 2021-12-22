<?php

use App\Http\Controllers\ActorController;
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

Route::get('/actors', [ActorController::class, 'getAll']);
Route::post('/actors', [ActorController::class, 'store']);
Route::put('/actors/{actor}', [ActorController::class, 'update']);
Route::delete('/actors/{actor}', [ActorController::class, 'destroy']);