<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DosenController;
use App\Http\Controllers\HomeController;


use function PHPUnit\Framework\returnValue;

route::get('/',function(){
    return view('index');
});

// Halaman-halaman lain
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/fasilitas', function () {
    return view('fasilitas');
});



Route::get('/ekstrakulikuler', function () {
    return view('ekstrakulikuler');
});

Route::get('/tampildata', function () {
    return view('tampildata');
});


// jurusan
Route::get('/informatika', function () {
    return view('informatika');
});

Route::get('/TeknikIndustri', function () {
    return view('TeknikIndustri');
});









// Unit kegiatan Mahasiswa
Route::get('/kelapa', function () {
    return view('/../ukm/kelapa');
});

Route::get('/kerohanian', function () {
    return view('/../ukm/kerohanian');
});

Route::get('/olahraga', function () {
    return view('/../ukm/olahraga');
});

Route::get('/silat', function () {
    return view('/../ukm/silat');
});

Route::get('/sanggar', function () {
    return view('/../ukm/sanggar');
});

Route::get('/dignity', function () {
    return view('/../ukm/dignity');
});

Route::get('/proclub', function () {
    return view('/../ukm/proclub');
});

Route::get('/rilis', function () {
    return view('/../ukm/rilis');
});

Route::get('/kdd', function () {
    return view('/../ukm/kdd');
});


// Data Akademik Dosen
Route::get('/DataAkademik', function () {
    return view('DataAkademik');
});

// Rute CRUD Dosen menggunakan resource controller
Route::resource('dosens', DosenController::class);

Route::post('/submit-dosen', [DosenController::class, 'store'])->name('dosen.store');

