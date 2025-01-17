<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DosenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TempatController;


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




// more
Route::get('/ekstrakulikuler', function () {
    return view('ekstrakulikuler');
});

Route::get('/tampildata', function () {
    return view('tampildata');
});

Route::get('/contact', function () {
    return view('contact');
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


// fasilitas
    Route::controller(TempatController::class)->group(function () {
    Route::get('/Aula', 'Aula')->name('tempat.Aula');
    Route::get('/mesjid', 'mesjid')->name('tempat.mesjid');
    Route::get('/kelas', 'kelas')->name('tempat.kelas');
    Route::get('/laboratoriumK', 'laboratoriumK')->name('tempat.laboratoriumK');
    Route::get('/praktekTI', 'praktekTI')->name('tempat.praktekTI');
    Route::get('/perpustakaan', 'perpustakaan')->name('tempat.perpustakaan');
    Route::get('/asrama', 'asrama')->name('tempat.asrama');
    Route::get('/lapangan', 'lapangan')->name('tempat.lapangan');
    Route::get('/kantin', 'kantin')->name('tempat.kantin');
});


