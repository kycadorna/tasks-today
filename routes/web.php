<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;

Route::get('/', [TaskController::class, 'today']);
Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/about', [PageController::class, 'about']);