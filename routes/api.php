<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobOfferController;
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

Route::prefix('job-offers')->group(function () {
    Route::get('/', [JobOfferController::class, 'index']);
    Route::post('/', [JobOfferController::class, 'store']);
    Route::get('/{id}', [JobOfferController::class, 'show']);
    Route::put('/{id}', [JobOfferController::class, 'update']);
    Route::delete('/{id}', [JobOfferController::class, 'destroy']);
});
