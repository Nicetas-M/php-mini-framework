<?php

use App\Controllers\AuthenticationController;
use App\Controllers\MovieController;
use App\Controllers\HomeController;
use App\Controllers\RegisterController;
use App\Kernel\Router\Route;

return [
    Route::get('/home', [HomeController::class, 'index']),
    Route::get('/movies', [MovieController::class, 'index']),
    Route::get('/admin/movies/add', [MovieController::class, 'add']),
    Route::post('/admin/movies/add', [MovieController::class, 'store']),
    Route::get('/register', [RegisterController::class, 'index']),
    Route::post('/register', [RegisterController::class, 'register']),
    Route::get('/authentication', [AuthenticationController::class, 'index']),
    Route::post('/authentication', [AuthenticationController::class, 'authentication']),
    Route::post('/logout', [AuthenticationController::class, 'logout']),
];