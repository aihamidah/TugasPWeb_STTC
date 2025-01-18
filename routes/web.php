<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosensController;
use App\Http\Controllers\TempatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UKMController;


use function PHPUnit\Framework\returnValue;

// Index/home
Route::get('/', [HomeController::class, 'index']);
Route::get('/profile', [HomeController::class, 'profile']);
Route::get('/fasilitas', [HomeController::class, 'fasilitas']);
Route::get('/ekstrakulikuler', [HomeController::class, 'ekstrakulikuler']);
Route::get('/tampildata', [HomeController::class, 'tampildata']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/DataAkademik', [HomeController::class, 'DataAkademik']);

// jurusan
Route::get('/informatika', [HomeController::class, 'informatika']);
Route::get('/TeknikIndustri', [HomeController::class, 'TeknikIndustri']);


// Rute CRUD Dosen menggunakan resource controller
Route::resource('dosens', DosensController::class);

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

// UKM
Route::controller(UKMController::class)->group(function () {
    Route::get('/kelapa', 'kelapa')->name('ukm.kelapa');
    Route::get('/kerohanian', 'kerohanian')->name('ukm.kerohanian');
    Route::get('/olahraga', 'olahraga')->name('ukm.olahraga');
    Route::get('/silat', 'silat')->name('ukm.silat');
    Route::get('/sanggar', 'sanggar')->name('ukm.sanggar');
    Route::get('/dignity', 'dignity')->name('ukm.dignity');
    Route::get('/proclub', 'proclub')->name('ukm.proclub');
    Route::get('/rilis', 'rilis')->name('ukm.rilis');
    Route::get('/kdd', 'kdd')->name('ukm.kdd');
});