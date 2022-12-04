<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Layout.main');
});


Route::get('Karyawan/index', [KaryawanController::class, 'index']);
Route::get('Karyawan/create', [KaryawanController::class, 'create']);
Route::get('Karyawan/edit', [KaryawanController::class, 'edit']);
