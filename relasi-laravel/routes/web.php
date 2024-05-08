<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// relasi 1 - one to one
Route::get('relasi-1', function () {
    # Temukan mahasiswa dengan NIM D015015072
    $mahasiswa = App\Models\Mahasiswa::where('nim', '=', 'D015015072')->first();

    # Tampilkan nama wali mahasiswa
    return $mahasiswa->wali->nama;
});


// Relasi one to Many
Route::get('relasi-2', function () {
    # Temukan mahasiswa dengan NIM D015015072
    $mahasiswa = App\Models\Mahasiswa::where('nim', '=', 'D015015072')->first();
    
    # Tampilkan nama dosen pembimbing
    return $mahasiswa->dosen->nama;
});

Route::get('relasi-3', function () {
    # Temukan dosen dengan yang bernama Eko
    $dosen = App\Models\Dosen::where('nama', '=', 'Eko')->first();
    
    # Tampilkan seluruh data mahasiswa didikannya
    foreach ($dosen->mahasiswa as $temp) {
        echo '<li> Nama : ' . $temp->nama . ' <strong>' . $temp->nim . '</strong></li>';
    }
});


// Relasi Many To Many 
Route::get('relasi-4', function () {
    # Bila kita ingin melihat hobi saya
    $ani = App\Models\Mahasiswa::where('nama', '=', 'Ani')->first();
    
    # Tampilkan seluruh hobi si ani
    foreach ($ani->hobi as $temp) {
        echo '<li>' . $temp->hobi . '</li>';
    }
});

Route::get('relasi-5', function () {
    # Temukan hobi Menulis
    $menulis = App\Models\Hobi::where('hobi', '=', 'Menulis')->first();
    
    # Tampilkan semua mahasiswa yang punya hobi menulis
    foreach ($menulis->mahasiswa as $temp) {
        echo '<li> Nama : ' . $temp->nama . ' <strong>' . $temp->nim . '</strong></li>';
    }
});

Route::get('semuarelasi', function () {
    $semuaRelasi = App\Models\Mahasiswa::with('hobi', 'wali', 'dosen')->get();

    return view('semuaRelasi', compact('semuaRelasi'));
});