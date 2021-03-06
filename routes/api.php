<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\CrudsController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/news',[App\Http\Controllers\NewsController::class,'index']);
Route::get('/cruds',[App\Http\Controllers\CrudsController::class,'index']);
Route::post('/cruds/store',[App\Http\Controllers\CrudsController::class,'store']);
Route::delete('/delete/{id}',[App\Http\Controllers\CrudsController::class,'destroy']);
Route::get('/edit/{id}',[App\Http\Controllers\CrudsController::class,'edit']);
Route::post('/update/{id}',[App\Http\Controllers\CrudsController::class,'update']);
