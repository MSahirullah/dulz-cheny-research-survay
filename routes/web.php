<?php

use App\Http\Controllers\ServayController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

