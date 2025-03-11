<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;

Route::get('/simple-message', function () {
    return 'Hello, Laravel!';
});

Route::get('/greet', [GreetController::class, 'showGreet']);

Route::resource('tasks', TaskController::class);