<?php

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
Route::post('/v1/login',[App\Http\Controllers\ApiController::class,'login']);
Route::get('/v1/township',[App\Http\Controllers\ApiController::class,'township']);
Route::post('/v1/store',[App\Http\Controllers\ApiController::class,'store']);
Route::get('/v1/searchClient/{phone?}',[App\Http\Controllers\ApiController::class,'searchClient']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
