<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(UploadController::class)->group(function () {
    Route::post('upload-csv',[UploadController::class, 'uploadCsv']);
    
});
