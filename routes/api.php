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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//////////////////////////////////////////////////////PETUGAS
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');
Route::put('/ubah_petugas/{id}','UserController@update')->middleware('jwt.verify');
Route::delete('/hapus_petugas/{id}','UserController@destroy')->middleware('jwt.verify');
Route::get('/tampil_petugas','UserController@tampil_petugas')->middleware('jwt.verify');
