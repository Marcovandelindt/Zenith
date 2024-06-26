<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/spotify', [App\Http\Controllers\Spotify\SpotifyController::class, 'index'])->name('spotify.index');

Route::get('/steps', [App\Http\Controllers\Steps\StepsController::class, 'index'])->name('steps.index');
Route::get('/steps/create', [App\Http\Controllers\Steps\CreateStepsController::class, 'index'])->name('steps.create');
Route::post('/steps/create', [App\Http\Controllers\Steps\CreateStepsController::class, 'create']);
Route::get('/steps/totals', [App\Http\Controllers\Steps\StepTotalsController::class, 'index'])->name('step.totals');
