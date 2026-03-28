<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\Admin\MachineController as AdminMachineController;

Route::get('/', [MainController::class, 'index']);
Route::get('/about', [MainController::class, 'about']);

Route::get('/machines', [MachineController::class, 'index']);
Route::get('/machines/{id}', [MachineController::class, 'show']);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('machines', AdminMachineController::class)->only([
        'index', 'show', 'destroy'
    ]);
});