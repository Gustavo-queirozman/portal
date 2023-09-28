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

Route::get('/configuracaoSMS', [App\Http\Controllers\ConfiguracaoSMS\MostrarConfiguracaoSMSController::class, 'create']);
Route::post('/configuracaoSMS', [App\Http\Controllers\ConfiguracaoSMS\CriarConfiguracaoSMSController::class, 'store']);


Route::get('/configuracaoEmail', [App\Http\Controllers\ConfiguracaoEmail\MostrarConfiguracaoEmailController::class, 'create']);
Route::post('/configuracaoEmail', [App\Http\Controllers\ConfiguracaoEmail\CriarConfiguracaoEmailController::class, 'store']);
