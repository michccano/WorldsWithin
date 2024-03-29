<?php

use App\Http\Controllers\TokenController;
use App\Http\Controllers\WorldsWithinController;
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

Route::post('register',[TokenController::class,'register']);
Route::post('login',[TokenController::class,'login']);

Route::post('get-data',[WorldsWithinController::class,'getData']);
Route::post('search/{keyword}',[WorldsWithinController::class,'search_data']);
Route::post('single-data/{assetId}',[WorldsWithinController::class,'getSingleData']);

