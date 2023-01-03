<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ContactApiController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/contacts', [ContactApiController::class, 'index'] );

Route::post('/contacts', [ContactApiController::class, 'store'] );

Route::get('/contacts/{id}', [ContactApiController::class, 'show'] );

Route::put('/contacts/{id}', [ContactApiController::class, 'update'] );

Route::delete('/contacts/{id}', [ContactApiController::class, 'destroy'] );
