<?php

use Illuminate\Http\Request;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/players', 'Api\V2\PlayerController@index');
Route::get('/players/{id}', 'Api\V2\PlayerController@show');
Route::post('/players', 'Api\V2\PlayerController@store');
Route::post('/players/{id}/answers', 'Api\V2\PlayerController@answer');
Route::delete('/players/{id}', 'Api\V2\PlayerController@delete');
Route::delete('/players/{id}/answers', 'Api\V2\PlayerController@resetAnswers');
