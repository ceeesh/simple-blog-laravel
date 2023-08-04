<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Show Register Form
Route::get('/register', [UserController::class, 'register']);

// Show Register Form
Route::post('/create', [UserController::class, 'store'])->middleware('guest');

// Show Login Form
Route::get('/', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/authenticate', [UserController::class, 'authenticate']);

// Logout User
Route::post('/logout', [UserController::class, 'logout']);





// Show Homepage
Route::get('/home', [BlogController::class, 'index'])->middleware('auth');

// Show Create Form
Route::get('/blogs/create', [BlogController::class, 'create'])->middleware('auth');

// Store Data
Route::post('/blogs', [BlogController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->middleware('auth');

// Update Blog
Route::put('/blogs/{blog}', [BlogController::class, 'update'])->middleware('auth');

// Show Single Blog
Route::get('/blogs/{blog}', [BlogController::class, 'show']);

