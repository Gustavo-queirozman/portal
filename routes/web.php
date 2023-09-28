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

Route::get('/configuracaoSMS', [App\Http\Controllers\ConfiguracaoSMS\MostrarConfiguracaoSMSController::class, '__invoke']);
Route::post('/configuracaoSMS', [App\Http\Controllers\ConfiguracaoSMS\CriarConfiguracaoSMSController::class, '__invoke']);


Route::get('/configuracaoEmail', [App\Http\Controllers\ConfiguracaoEmail\MostrarConfiguracaoEmailController::class, '__invoke']);
Route::post('/configuracaoEmail', [App\Http\Controllers\ConfiguracaoEmail\CriarConfiguracaoEmailController::class, '__invoke']);
