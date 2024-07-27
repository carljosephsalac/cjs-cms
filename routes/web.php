<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::resource('posts', PostController::class)->middleware(['auth', 'verified']);

Route::controller(PostController::class)->group(function() {
    Route::middleware(['auth', 'verified'])->group(function() {
        Route::get('/posts', 'index')->name('posts.index');
        Route::get('/posts/create', 'create')->name('posts.create');
        Route::post('/posts', 'store')->name('posts.store');
        Route::get('/posts/{post}/edit', 'edit')->name('posts.edit')->can('edit-post', 'post');
        Route::get('/posts/{post}', 'show')->name('posts.show');
        Route::patch('/posts/{post}', 'update')->name('posts.update');
        Route::delete('/posts/{post}', 'destroy')->name('posts.destroy');
    });
});