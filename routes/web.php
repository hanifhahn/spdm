<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\showTambahMahasiswa;
use App\Http\Controllers\storeNewMahasiswa;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/', [MahasiswaController::class, 'index'])->name('home');

    Route::get('/dashboard', [MahasiswaController::class, 'index'])->name('dashboard');
    Route::get('/tambah', [MahasiswaController::class, 'showTambahMahasiswa'])->name('tambah');
    Route::post('/tambah', [MahasiswaController::class, 'storeNewMahasiswa'])->name('tambah');

    Route::delete('/delete/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.delete');

    Route::get('/update/{mahasiswa}', [MahasiswaController::class, 'showUpdateMahasiswa']);
    Route::post('/update/{mahasiswa}/updateMahasiswa', [MahasiswaController::class, 'updateDataMahasiswa'])->name('mahasiswa.update');
});

require __DIR__.'/auth.php';
