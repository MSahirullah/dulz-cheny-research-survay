<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServayController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::post('/stage-2/form/submit', [HomeController::class, 'stage2FormSubmission'])->name('stage-2.form.submit');
Route::post('/stage-2/email-verification/submit', [HomeController::class, 'stage2EmailVerificationSubmission'])->name('stage-2.email-verification.submit');

Route::get('/survay/stage-1', [ServayController::class, 'stageOneIndex'])->name('survay.stage-1');
Route::post('/survay/stage-1', [ServayController::class, 'stageOneSubmit'])->name('survay.stage-1.submit');

Route::get('/survay/stage-2', [ServayController::class, 'stageTwoIndex'])->name('survay.stage-2');
Route::post('/survay/stage-2', [ServayController::class, 'stageTwoSubmit'])->name('survay.stage-2.submit');

Route::get('/survay/stage-3', [ServayController::class, 'stageThreeIndex'])->name('survay.stage-3');
Route::post('/survay/stage-3', [ServayController::class, 'stageThreeSubmit'])->name('survay.stage-3.submit');

Route::get('/survay/stage-4', [ServayController::class, 'stageFourIndex'])->name('survay.stage-4');
Route::post('/survay/stage-4', [ServayController::class, 'stageFourSubmit'])->name('survay.stage-4.submit');

Route::get('/survay/thank-you', [ServayController::class, 'thankYouIndex'])->name('survay.thank-you');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('home');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/delete/record/', [DashboardController::class, 'deleteRercord'])->name('delete.record');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
