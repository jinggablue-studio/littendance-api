<?php

use App\Http\Controllers\Api\v1\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api;

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

Route::prefix('/v1')->middleware(['api'])->group(function() {
    // Users
    Route::get('/users', [Api\v1\UserController::class, 'index']);
    Route::post('/users', fn() => response('POST users'));
    Route::put('/users', fn() => response('UPDATE users'));
    // Route::delete('/users', fn() => response('DELETE users'));
});
