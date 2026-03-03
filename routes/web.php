<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MachineController;

Route::get('/', [MainController::class, 'index']);
Route::get('/about', [MainController::class, 'about']);

Route::get('/machines', [MachineController::class, 'index']);
Route::get('/machines/{id}', [MachineController::class, 'show']);
Route::get('/machines/{id}', [MachineController::class, 'show']);