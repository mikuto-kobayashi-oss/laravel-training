<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [App\Http\Controllers\HelloController::class, 'index']);

Route::get('/office', [App\Http\Controllers\OfficeController::class, 'getOffices']);

Route::get('/post/create', [PostController::class, 'create'])->name('post.create');

Route::post('/post', [PostController::class, 'store'])->name('post.store');;

Route::get('/post/{office}/edit', [PostController::class, 'edit'])->name('post.edit');

Route::put('/post/{office}', [PostController::class, 'update'])->name('post.update');

Route::delete('/post/{office}', [PostController::class, 'delete'])->name('post.delete');

Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'login'])->name('login');