<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\CategoryController;
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


//Route get:  return json all data. 
Route::get('/category',[CategoryController::class, 'index']);
//  Route get: return json data for ID data.  
Route::get('/category/{id}',[CategoryController::class, 'show']);
//  Route post: add a new data. 
Route::post('/add/category',[CategoryController::class, 'create']);
//  Route put: update a new data. 
Route::put('/update/category/{id}',[CategoryController::class, 'update']);
//  Route delete: delete a new data. 
Route::delete('/delete/category/{id}',[CategoryController::class, 'delete']);
