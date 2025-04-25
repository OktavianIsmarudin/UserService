<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\PendaftaranController;

Route::apiResource('siswas', SiswaController::class);
Route::apiResource('jurusans', JurusanController::class);
Route::apiResource('pendaftarans', PendaftaranController::class);
