<?php

use App\Http\Controllers\UIController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UIController::class, 'index']);
Route::get('/siswas', [UIController::class, 'siswas']);
Route::post('/siswas', [UIController::class, 'storeSiswa']);
Route::get('/jurusans', [UIController::class, 'jurusans']);
Route::post('/jurusans', [UIController::class, 'storeJurusan']);
Route::get('/pendaftarans', [UIController::class, 'pendaftarans']);
Route::post('/pendaftarans', [UIController::class, 'storePendaftaran']);

