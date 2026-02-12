<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [App\Http\Controllers\HelloController::class, 'index']);

Route::get('/office', [App\Http\Controllers\OfficeController::class, 'getUser']);

Route::get('/post/create', [PostController::class, 'create'])->name('post.create');

Route::post('/post', [PostController::class, 'store'])->name('post.store');;

Route::get('/post/{office}/edit', [PostController::class, 'edit'])->name('post.edit');

Route::put('/post/{office}', [PostController::class, 'update'])->name('post.update');
