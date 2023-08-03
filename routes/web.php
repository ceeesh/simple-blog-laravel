<?php

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

// Show Login Form
Route::get('/', [UserController::class, 'login']);

// Log In User
Route::post('/authenticate', [UserController::class, 'authenticate']);

// Show Register Form
Route::get('/register', [UserController::class, 'register']);

// Show Register Form
Route::post('/create', [UserController::class, 'store']);

// Logout User
Route::post('/logout', [UserController::class, 'logout']);





// Show Homepage
Route::get('/home', function () {
    return view('components.home');
});