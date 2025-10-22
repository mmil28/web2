<?php

use App\Http\Controllers\FakultasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\JenjangController;

Route::get('/', function () {
    return view('welcome');
});

Route::get(uri: '/fakultas', action: [FakultasController::class, 'index'])-> name(name: 'fakultas.index');

Route::get(uri: '/mahasiswa', action: [MahasiswaController::class, 'index'])-> name(name: 'mahasiswa.index');

Route::get(uri: '/prodi', action: [ProdiController::class, 'index'])-> name(name: 'prodi.index');

Route::get(uri: '/jenjang', action: [JenjangController::class, 'index'])-> name(name: 'jenjang.index');
