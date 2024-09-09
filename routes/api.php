<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();


});

//Route::middleware('auth:api')->post('/send-message', [ChatController::class, 'sendMessage']);


Route::Post('/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/validate-token', [AuthController::class, 'validateToken']);

    Route::post('/send-message', [ChatController::class, 'sendMessage']);
});
