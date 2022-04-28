<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelamarController;
use App\Http\Controllers\PendidikanController;

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

Route::get('pelamar', [PelamarController::class, 'index']);
Route::post('pelamar/store', [PelamarController::class, 'store']);

Route::get('pendidikan', [PendidikanController::class, 'index']);
Route::post('pendidikan/store', [PendidikanController::class, 'store']);

//Route::get('pelamar', 'PelamarController@index');
