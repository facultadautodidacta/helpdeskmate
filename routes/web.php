<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CapturaSoporte;
use App\Http\Controllers\ListadoSeguimiento;


Route::get('/', [AuthController::class, 'index'])->name('auth-login');
Route::post('/logear', [AuthController::class, 'logear'])->name('auth-logear');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth-logout');
//de un solo uso
//Route::get('/nuevo', [AuthController::class, 'nuevo']);

Route::get('/soporte', [CapturaSoporte::class, 'index'])->name('soporte-index');
Route::get('/listado', [ListadoSeguimiento::class, 'index'])->name('listado-index');

