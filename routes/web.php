<?php

use Illuminate\Support\Facades\Route;

Route::get('home', function () {
    return view('home');
});
use App\Http\Controllers\PegawaiController;
Route::get('pegawai', [PegawaiController::class,'index']);

// Route untuk menampilkan form tambah pegawai
Route::get('/pegawai/tambah', [PegawaiController::class,'tambah']);
// Route untuk menyimpan data pegawai
Route::post('/pegawai/store', [PegawaiController::class,'store']);

Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::post('/pegawai/update', [PegawaiController::class, 'update'])->name('pegawai.update');
Route::get('/pegawai/delete/{id}', [PegawaiController::class, 'delete'])->name('pegawai.delete');





use App\Http\Controllers\GolonganController;
Route::get('golongan',[GolonganController::class,'index']);

// Route untuk menampilkan form tambah golongan
Route::get('/golongan/tambah', [GolonganController::class,'tambah']);
// Route untuk menyimpan data golongan
Route::post('/golongan/store', [GolonganController::class,'store']);

Route::get('/golongan/edit/{id}', [GolonganController::class, 'edit'])->name('golongan.edit'); // Menampilkan form edit golongan
Route::put('/golongan/update/{id}', [GolonganController::class, 'update'])->name('golongan.update'); // Memperbarui data golongan
Route::get('/golongan/delete/{id}', [GolonganController::class, 'delete'])->name('golongan.delete'); // Menghapus data golongan







use App\Http\Controllers\LemburController;
Route::get('lembur',[LemburController::class,'index']);

// Route untuk menampilkan form tambah lembur
Route::get('/lembur/tambah', [LemburController::class,'tambah']);
// Route untuk menyimpan data lembur
Route::post('/lembur/store', [LemburController::class,'store']);

Route::get('/lembur/edit/{id}', [LemburController::class, 'edit'])->name('lembur.edit');
Route::post('/lembur/update', [LemburController::class, 'update'])->name('lembur.update');
Route::get('/lembur/delete/{id}', [LemburController::class, 'delete'])->name('lembur.delete');



use App\Http\Controllers\GajiController;

// Route untuk menampilkan daftar gaji
Route::get('/gaji', [GajiController::class, 'index']);

// Route untuk menampilkan form tambah gaji
Route::get('/gaji/tambah', [GajiController::class,'tambah']);

// Route untuk menyimpan data gaji
Route::post('/gaji/store', [GajiController::class,'store']);

// Route untuk menampilkan form edit gaji
Route::get('/gaji/edit/{id}', [GajiController::class, 'edit'])->name('gaji.edit');

// Route untuk memperbarui data gaji
Route::post('/gaji/update/{id}', [GajiController::class, 'update'])->name('gaji.update');

// Route untuk menghapus data gaji
Route::get('/gaji/delete/{id}', [GajiController::class, 'delete'])->name('gaji.delete');
