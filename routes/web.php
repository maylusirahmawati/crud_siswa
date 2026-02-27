<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\SiswaController;

Route::resource('siswas', SiswaController::class);

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index'); 
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create'); 
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store'); 
Route::get('/siswa/{siswa}/edit', [SiswaController::class, 'edit'])->name('siswa.edit'); 
Route::put('/siswa/{siswa}', [SiswaController::class, 'update'])->name('siswa.update'); 
Route::delete('/siswa/{siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');