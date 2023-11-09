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
Route::post('/store', [CapturaSoporte::class, 'store'])->name('soporte-store');
Route::get('/create', [CapturaSoporte::class, 'create'])->name('soporte-create');
Route::get('/edit/{id}', [CapturaSoporte::class, 'edit'])->name('soporte-edit');
Route::put('/update/{id}', [CapturaSoporte::class, 'update'])->name('soporte-update');
Route::delete('/destroy/{id}', [CapturaSoporte::class, 'destroy'])->name('soporte-destroy');


Route::get('/listado', [ListadoSeguimiento::class, 'index'])->name('listado-index');

