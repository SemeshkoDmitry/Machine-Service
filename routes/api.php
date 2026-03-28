<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MachineController;

Route::get('/machines', [MachineController::class, 'index']);
Route::get('/machines/{id}', [MachineController::class, 'show']);
Route::post('/machines/store', [MachineController::class, 'store']);

Route::put('/machines/{id}', [MachineController::class, 'update']);
Route::delete('/machines/{id}', [MachineController::class, 'destroy']);