<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

// Главная страница (пока welcome)
Route::get('/', function () {
    return view('welcome');
});

// Все маршруты для новостей (CRUD)
Route::resource('news', NewsController::class);
