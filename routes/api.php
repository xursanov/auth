<?php

use App\Http\Controllers\RegisController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('test', [RegisController::class, 'register']);

Route::get('sal', [RegisController::class, 'createBlog']);

Route::put('get', [RegisController::class, 'updateBlog']);



