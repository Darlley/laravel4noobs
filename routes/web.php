<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UsersController;
use App\Http\Controllers\LandingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingController::class, 'getLandingPage']);
Route::get('/about', [LandingController::class, 'getAboutPage']);

// Route::get('/users/me', [UsersController::class, 'getMeProfile'])->name('username');
// Route::get('/user/{username}', [UsersController::class, 'getProfile']);
// Route::get('/test', [UsersController::class, 'test']);

// Route::get('/test', [UsersController::class, 'test']);