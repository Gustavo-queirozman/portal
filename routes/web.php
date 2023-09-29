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

Route::get('/configuracao-sms', App\Http\Controllers\Configuracao\sms\MostrarConfiguracaoSmsController::class)->name('configuracao-sms');
Route::post('/configuracao-sms', App\Http\Controllers\Configuracao\sms\CriarConfiguracaoSmsController::class)->name('configuracao-sms');

Route::get('/configuracao-email', App\Http\Controllers\Configuracao\email\MostrarConfiguracaoEmailController::class)->name('configuracao-email');
Route::post('/configuracao-email', App\Http\Controllers\Configuracao\email\CriarConfiguracaoEmailController::class)->name('configuracao-email');

