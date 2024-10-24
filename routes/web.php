<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('users.login');
});

Route::get('/show_video',[VideoController::class,'fetch']);
Route::get('/upload_video', [VideoController::class, 'index'])->name('video.index');
Route::post('/insert-file', [VideoController::class, 'store'])->name('insert.file'); // Added route for storing videos

Route::get('/register', [UserController::class, 'create']);

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout']);

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::get('/page', [UserController::class, 'page']);

Route::get('/category', [VideoController::class, 'category']);