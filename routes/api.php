<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\OriginalPhotosController;
use App\Http\Controllers\RegisterController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('photos', OriginalPhotosController::class);
    Route::get('photos/{photo}/download', [OriginalPhotosController::class, 'download'])->name('original-photos.download');
});

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/register', [RegisterController::class, 'register']);
