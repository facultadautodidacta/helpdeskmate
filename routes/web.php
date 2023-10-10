<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CapturaSoporte;
use App\Http\Controllers\ListadoSeguimiento;


Route::get('/', [AuthController::class, 'index'])->name('auth-login');
Route::get('/soporte', [CapturaSoporte::class, 'index'])->name('soporte-index');
Route::get('/listado', [ListadoSeguimiento::class, 'index'])->name('listado-index');

