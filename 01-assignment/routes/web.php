<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [App\Http\Controllers\HelloController::class, 'index']);

Route::get('/office', [App\Http\Controllers\OfficeController::class, 'getUser']);

Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create']);

Route::post('/post', [App\Http\Controllers\PostController::class, 'store']);