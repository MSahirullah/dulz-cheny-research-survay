<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServayController;

Route::get('/', [ServayController::class, 'index'])->name('index');

Route::get('/stage-1', [ServayController::class, 'stageOneIndex'])->name('stage-1');
Route::post('/stage-1', [ServayController::class, 'stageOneSubmit'])->name('stage-1.submit');


Route::get('/stage-2', [ServayController::class, 'stageTwoIndex'])->name('stage-2');
Route::post('/stage-2', [ServayController::class, 'stageTwoSubmit'])->name('stage-2.submit');

Route::get('/stage-3', [ServayController::class, 'stageThreeIndex'])->name('stage-3');
Route::post('/stage-3', [ServayController::class, 'stageThreeSubmit'])->name('stage-3.submit');

Route::get('/stage-4', [ServayController::class, 'stageFourIndex'])->name('stage-4');
Route::post('/stage-4', [ServayController::class, 'stageFourSubmit'])->name('stage-4.submit');

Route::get('/thank-you', [ServayController::class, 'thankYouIndex'])->name('thank-you');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('home');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
