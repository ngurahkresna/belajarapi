<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\DesignerController;

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

Route::get('/designer', 'App\Http\Controllers\DesignerController@index');
Route::post('/designer', 'App\Http\Controllers\DesignerController@create');
Route::put('/designer/{id}', 'App\Http\Controllers\DesignerController@update');
Route::delete('/designer/{id}', 'App\Http\Controllers\DesignerController@delete');