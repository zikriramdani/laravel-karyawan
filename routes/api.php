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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route Karyawan
Route::group(['namespace' => 'Api'], function () {
	Route::get('/karyawan', ['uses' => 'KaryawanController@index']); // Get Data
	Route::post('/karyawan', ['uses' => 'KaryawanController@store']); // Create Data
	Route::put('/karyawan/{id}', ['uses' => 'KaryawanController@update']); // Update Data
	Route::delete('/karyawan/{id}', ['uses' => 'KaryawanController@destroy']); // Delete Data
});
