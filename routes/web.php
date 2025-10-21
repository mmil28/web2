<?php

use App\Http\Controllers\FakultasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get(uri: '/fakultas', action: [FakultasController::class, 'index'])-> name(name: 'fakultas.index');
