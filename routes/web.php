<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'show']);

