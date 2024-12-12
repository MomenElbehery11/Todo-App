<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create',function(){
    return view('posts.create');
})->name('post.create');

Route::post('/store',[PostController::class,'store'])->name('post.store');
Route::get('/read',[PostController::class,'read'])->name('post.read');

Route::get('/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::put('/update/{id}', [PostController::class,'update'])->name('post.update');

Route::get('/delete/{id}', [PostController::class, 'delete'])->name('post.delete');
Route::get('/deleteAll', [PostController::class, 'deleteAll'])->name('post.deleteAll');
