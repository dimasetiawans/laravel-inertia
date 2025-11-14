<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index']);

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'store']);
Route::get('/login', [UserController::class, 'login'])->name('login');