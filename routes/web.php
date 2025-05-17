<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatasantriController;
use App\Http\Controllers\DataPengajarController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\NilaiPaudController;
use App\Http\Controllers\NilaiA1Controller;
use App\Http\Controllers\NilaiA2Controller;
use App\Http\Controllers\NilaiA3Controller;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\DatanilaiController;
use App\Http\Controllers\DatanilaiPaudController;
use App\Http\Controllers\DatanilaiA1Controller;
use App\Http\Controllers\DatanilaiA2Controller;
use App\Http\Controllers\DatanilaiA3Controller;
use App\Http\Controllers\MataPelajaranPaudController;
use App\Http\Controllers\MataPelajaranA1Controller;
use App\Http\Controllers\MataPelajaranA2Controller;
use App\Http\Controllers\MataPelajaranA3Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth', 'verified'])->name('pages.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->get('/admin', function () {
    return view('pages.dashboard');
});

Route::middleware(['auth', 'role:pengajar'])->get('/pengajar', function () {
    return view('pages.dashboard');
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');



require __DIR__.'/auth.php';

Route::get('/datasantri', [DatasantriController::class, 'index'])->name('datasantri.index');
Route::get('/datasantri/create', [DatasantriController::class, 'create'])->name('datasantri.create');
Route::post('/datasantri', [DatasantriController::class, 'store'])->name('datasantri.store');
Route::get('/datasantri/{id}/edit', [DatasantriController::class, 'edit'])->name('datasantri.edit');
Route::put('/datasantri/{id}', [DatasantriController::class, 'update'])->name('datasantri.update');
Route::delete('/datasantri/{id}', [DatasantriController::class, 'destroy'])->name('datasantri.destroy');

Route::get('/datapengajar', [DataPengajarController::class, 'index'])->name('datapengajar.index');
Route::get('/datapengajar/create', [DataPengajarController::class, 'create'])->name('datapengajar.create');
Route::post('/datapengajar', [DataPengajarController::class, 'store'])->name('datapengajar.store');
Route::get('/datapengajar/{id}/edit', [DataPengajarController::class, 'edit'])->name('datapengajar.edit');
Route::put('/datapengajar/{id}', [DataPengajarController::class, 'update'])->name('datapengajar.update');
Route::delete('/datapengajar/{id}', [DataPengajarController::class, 'destroy'])->name('datapengajar.destroy');


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
// Route::get('/nilai/kelas/{id}', [NilaiController::class, 'perKelas'])->name('nilai.perkelas');

Route::get('/datanilai', [DatanilaiController::class, 'index'])->name('datanilai.index');
Route::get('/datanilai/paud', [DatanilaiPaudController::class, 'index'])->name('datanilai.paud.index');
Route::post('/datanilai/paud', [DatanilaiPaudController::class, 'store']);
Route::get('/datanilai/paud/edit/{santri_id}', [DatanilaiPaudController::class, 'edit'])->name('datanilai.paud.edit');
Route::put('/datanilai/paud/update/{santri_id}', [DatanilaiPaudController::class, 'update'])->name('datanilai.paud.update');
Route::delete('/datanilai/paud/delete/{santri_id}/{mapel_id}', [DatanilaiPaudController::class, 'destroy'])->name('datanilai.paud.destroy');

Route::get('/datanilai/a1', [DatanilaiA1Controller::class, 'index'])->name('datanilai.a1.index');
Route::get('/datanilai/a1', [DatanilaiA1Controller::class, 'index'])->name('datanilai.a1.index');
Route::post('/datanilai/a1', [DatanilaiA1Controller::class, 'store']);
Route::get('/datanilai/a1/edit/{santri_id}', [DatanilaiA1Controller::class, 'edit'])->name('datanilai.a1.edit');
Route::put('/datanilai/a1/update/{santri_id}', [DatanilaiA1Controller::class, 'update'])->name('datanilai.a1.update');
Route::delete('/datanilai/a1/delete/{santri_id}/{mapel_id}', [DatanilaiA1Controller::class, 'destroy'])->name('datanilai.a1.destroy');

Route::get('/datanilai/a2', [DatanilaiA2Controller::class, 'index'])->name('datanilai.a2.index');
Route::get('/datanilai/a2', [DatanilaiA2Controller::class, 'index'])->name('datanilai.a2.index');
Route::post('/datanilai/a2', [DatanilaiA2Controller::class, 'store']);
Route::get('/datanilai/a2/edit/{santri_id}', [DatanilaiA2Controller::class, 'edit'])->name('datanilai.a2.edit');
Route::put('/datanilai/a2/update/{santri_id}', [DatanilaiA2Controller::class, 'update'])->name('datanilai.a2.update');
Route::delete('/datanilai/a2/delete/{santri_id}/{mapel_id}', [DatanilaiA2Controller::class, 'destroy'])->name('datanilai.a2.destroy');

Route::get('/datanilai/a3', [DatanilaiA3Controller::class, 'index'])->name('datanilai.a3.index');
Route::get('/datanilai/a3', [DatanilaiA3Controller::class, 'index'])->name('datanilai.a3.index');
Route::post('/datanilai/a3', [DatanilaiA3Controller::class, 'store']);
Route::get('/datanilai/a3/edit/{santri_id}', [DatanilaiA3Controller::class, 'edit'])->name('datanilai.a3.edit');
Route::put('/datanilai/a3/update/{santri_id}', [DatanilaiA3Controller::class, 'update'])->name('datanilai.a3.update');
Route::delete('/datanilai/a3/delete/{santri_id}/{mapel_id}', [DatanilaiA3Controller::class, 'destroy'])->name('datanilai.a3.destroy');


Route::post('/datanilai/simpan', [DatanilaiController::class, 'store'])->name('datanilai.store');
// Route::get('/datanilai/{kelasId}', [DatanilaiController::class, 'showNilaiByKelas'])->name('datanilai.show');
// Route::get('/datanilai/kelas/{id}', [DatanilaiController::class, 'showByKelas'])->name('nilai.kelas');

// Route::get('/santri-by-kelas/{id}', function($id) {
//     return \App\Models\Datasantri::where('kelas_id', $id)->get();
// });


Route::get('/matapelajaran', [MataPelajaranController::class, 'index'])->name('matapelajaran.index');

Route::get('/matapelajaran/paud', [MataPelajaranPaudController::class, 'index'])->name('matapelajaran.paud.index');
Route::get('/matapelajaran/paud/create', [MataPelajaranPaudController::class, 'create'])->name('matapelajaran.paud.create');
Route::post('/matapelajaran/paud', [MataPelajaranPaudController::class, 'store'])->name('matapelajaran.paud.store');
Route::get('/matapelajaran/paud/{id}/edit', [MataPelajaranPaudController::class, 'edit'])->name('matapelajaran.paud.edit');
Route::put('/matapelajaran/paud/{id}', [MataPelajaranPaudController::class, 'update'])->name('matapelajaran.paud.update');
Route::delete('/matapelajaran/paud/{id}', [MataPelajaranPaudController::class, 'destroy'])->name('matapelajaran.paud.destroy');


Route::get('/matapelajaran/a1', [MataPelajaranA1Controller::class, 'index'])->name('matapelajaran.a1.index');
Route::get('/matapelajaran/a1/create', [MataPelajaranA1Controller::class, 'create'])->name('matapelajaran.a1.create');
Route::post('/matapelajaran/a1', [MataPelajaranA1Controller::class, 'store'])->name('matapelajaran.a1.store');
Route::get('/matapelajaran/a1/{id}/edit', [MataPelajaranA1Controller::class, 'edit'])->name('matapelajaran.a1.edit');
Route::put('/matapelajaran/a1/{id}', [MataPelajaranA1Controller::class, 'update'])->name('matapelajaran.a1.update');
Route::delete('/matapelajaran/a1/{id}', [MataPelajaranA1Controller::class, 'destroy'])->name('matapelajaran.a1.destroy');

Route::get('/matapelajaran/a2', [MataPelajaranA2Controller::class, 'index'])->name('matapelajaran.a2.index');
Route::get('/matapelajaran/a2/create', [MataPelajaranA2Controller::class, 'create'])->name('matapelajaran.a2.create');
Route::post('/matapelajaran/a2', [MataPelajaranA2Controller::class, 'store'])->name('matapelajaran.a2.store');
Route::get('/matapelajaran/a2/{id}/edit', [MataPelajaranA2Controller::class, 'edit'])->name('matapelajaran.a2.edit');
Route::put('/matapelajaran/a2/{id}', [MataPelajaranA2Controller::class, 'update'])->name('matapelajaran.a2.update');
Route::delete('/matapelajaran/a2/{id}', [MataPelajaranA2Controller::class, 'destroy'])->name('matapelajaran.a2.destroy');

Route::get('/matapelajaran/a3', [MataPelajaranA3Controller::class, 'index'])->name('matapelajaran.a3.index');
Route::get('/matapelajaran/a3/create', [MataPelajaranA3Controller::class, 'create'])->name('matapelajaran.a3.create');
Route::post('/matapelajaran/a3', [MataPelajaranA3Controller::class, 'store'])->name('matapelajaran.a3.store');
Route::get('/matapelajaran/a3/{id}/edit', [MataPelajaranA3Controller::class, 'edit'])->name('matapelajaran.a3.edit');
Route::put('/matapelajaran/a3/{id}', [MataPelajaranA3Controller::class, 'update'])->name('matapelajaran.a3.update');
Route::delete('/matapelajaran/a3/{id}', [MataPelajaranA3Controller::class, 'destroy'])->name('matapelajaran.a3.destroy');

// Route::get('/matapelajaran/a2', [MataPelajaranA2Controller::class, 'index'])->name('matapelajaran.a2.index');
// Route::get('/matapelajaran/a3', [MataPelajaranA3Controller::class, 'index'])->name('matapelajaran.a3.index');


// Route::get('/matapelajaran/kelas/{nama_kelas}', [MataPelajaranController::class, 'showByKelas']);

// Route::get('/matapelajaran/{kelas}', [MataPelajaranController::class, 'show'])->name('matapelajaran.show');

