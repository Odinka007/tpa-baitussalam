<?php

use App\Http\Controllers\DatasantriController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\NilaiPaudController;
use App\Http\Controllers\NilaiA1Controller;
use App\Http\Controllers\NilaiA2Controller;
use App\Http\Controllers\NilaiA3Controller;
use App\Http\Controllers\MataPelajaranController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/datasantri', [DatasantriController::class, 'index'])->name('datasantri.index');
Route::get('/datasantri/create', [DatasantriController::class, 'create'])->name('datasantri.create');
Route::post('/datasantri', [DatasantriController::class, 'store'])->name('datasantri.store');
Route::get('/datasantri/{id}/edit', [DatasantriController::class, 'edit'])->name('datasantri.edit');
Route::put('/datasantri/{id}', [DatasantriController::class, 'update'])->name('datasantri.update');
Route::delete('/datasantri/{id}', [DatasantriController::class, 'destroy'])->name('datasantri.destroy');


Route::get('/nilai', [NilaiController::class, 'index'])->name('nilai.index');
Route::get('/nilai/create', [NilaiController::class, 'create'])->name('nilai.create');
Route::post('/nilai', [NilaiController::class, 'store'])->name('nilai.store');
Route::get('/nilai/{id}/edit', [NilaiController::class, 'edit'])->name('nilai.edit');
Route::put('/nilai/{id}', [NilaiController::class, 'update'])->name('nilai.update');
Route::delete('/nilai/{id}', [NilaiController::class, 'destroy'])->name('nilai.destroy');
Route::get('/nilai/paud', [NilaiPaudController::class, 'index'])->name('nilai.paud');
Route::get('/nilai/a1', [NilaiA1Controller::class, 'index'])->name('nilai.a1');
Route::get('/nilai/a2', [NilaiA2Controller::class, 'index'])->name('nilai.a2');
Route::get('/nilai/a3', [NilaiA3Controller::class, 'index'])->name('nilai.a3');


Route::get('/matapelajaran', [MataPelajaranController::class, 'index'])->name('matapelajaran.index');
Route::get('/matapelajaran/paud', [MataPelajaranController::class, 'paud'])->name('matapelajaran.paud');
Route::get('/matapelajaran/a1', [MataPelajaranController::class, 'a1'])->name('matapelajaran.a1');
Route::get('/matapelajaran/a2', [MataPelajaranController::class, 'a2'])->name('matapelajaran.a2');
Route::get('/matapelajaran/a3', [MataPelajaranController::class, 'a3'])->name('matapelajaran.a3');
// Route::get('/matapelajaran/kelas/{nama_kelas}', [MataPelajaranController::class, 'showByKelas']);












