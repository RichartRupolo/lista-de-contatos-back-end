<?php

use App\Http\Controllers\PersonController;
use App\Http\Controllers\PersonContactController;
use App\Http\Controllers\AuthController;
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
Route::get('/person', [PersonController::class, 'index']);
Route::get('/person/contact/{person_id}', [PersonContact::class, 'index']);
Route::get('/person/{id}', [PersonController::class, 'show']);
Route::get('/person/search/{name}', [PersonController::class, 'search']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::post('/person', [PersonController::class, 'store']);
    Route::put('/person/{id}', [PersonController::class, 'update']);
    Route::delete('/person/{id}', [PersonController::class, 'destroy']);
    Route::delete('/person/contact/{id}', [PersonContactController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
