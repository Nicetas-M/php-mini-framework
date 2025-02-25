<?php

use App\Controllers\BaobabController;
use App\Controllers\HomeController;
use App\Kernel\Router\Route;

return [
    Route::get('/home', [HomeController::class, 'index']),
    Route::get('/baobab', [BaobabController::class, 'index']),
    Route::get('/call_func', function() {
        echo '<h1>callable function</h1>';
    }),
];