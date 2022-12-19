<?php

use App\Http\Controllers\FoldersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OriginalPhotosController;
use App\Http\Controllers\PhotoReferencesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SharedFolderEmailsController;
use App\Http\Controllers\SharedFoldersController;
use App\Http\Controllers\StatisticsController;
use App\Http\Resources\UserResource;
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
    return response()->json(UserResource::make($request->user()->load(['originalPhotos', 'folders'])));
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResources([
        'photos' => OriginalPhotosController::class,
        'folders' => FoldersController::class,
        'folders.photos' => PhotoReferencesController::class,
        'shared' => SharedFoldersController::class,
    ]);
    Route::apiResource('shared.emails', SharedFolderEmailsController::class)->only(['index', 'store', 'destroy']);

    Route::get('folders/{folder}/references/{photoReference}', [PhotoReferencesController::class, 'showReference']);
    Route::post('folders/{folder}/photos/{photo}', [PhotoReferencesController::class, 'addToFolder']);
    Route::delete('folders/{folder}/references/{photoReference}', [PhotoReferencesController::class, 'destroyReference']);
    Route::post('folders/{folder}/share', [FoldersController::class, 'share']);

    Route::get('photos/{photo}/download', [OriginalPhotosController::class, 'download'])->name('original-photos.download');
    Route::get('photos/download/{image}', [OriginalPhotosController::class, 'download.extention'])->name('original-photos.download.extention');

    Route::get('statistics/storage', [StatisticsController::class, 'diskUsage']);
    Route::get('statistics/summary', [StatisticsController::class, 'summary']);
});

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/register', [RegisterController::class, 'register']);
