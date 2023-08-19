<?php

use App\Http\Controllers\ItemController;
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

Route::controller(ItemController::class) ->group(function(){
    Route::get('/items', 'index');
    Route::post('/item', 'store');
    Route::get('/item/{id}','show');
    Route::put('/item/{id}','update');
    Route::delete('/item/{id}', 'destroy');
});
