<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuTamuController;

Route::get('/', [BukuTamuController::class, 'create']);

Route::post('/store', [BukuTamuController::class, 'store']);

Route::get('/admin', [BukuTamuController::class, 'index']);

Route::get('/edit/{id}', [BukuTamuController::class, 'edit']);

Route::put('/update/{id}', [BukuTamuController::class, 'update']);

Route::delete('/delete/{id}', [BukuTamuController::class, 'destroy']);
