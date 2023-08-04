<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Event\ControllerEvent;

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
    // home kontak
Route::get('/home', function () {
    return view('home');
});
Route::get('/kontak', function () {
    return view('contact');
});

    // profil
Route::get('/sejarah', function () {
return view('profil.sejarah');
});
Route::get('/visi-misi', function () {
return view('profil.visimisi');
});
Route::get('/identitas-sekolah', function () {
return view('profil.identitassekolah');
});
Route::get('/kepala-sekolah', function () {
    return view('profil.kepalasekolah');
    });
Route::get('/guru-staff', function () {
return view('profil.gurustaff');
});
Route::get('/struktur-organisasi', function () {
return view('profil.struktur');
});
Route::get('/fasilitas', function () {
return view('profil.fasilitas');
});

    // program
Route::get('/kurikulum', function () {
    return view('program.kurikulum');
});
Route::get('/kesiswaan', function () {
    return view('program.kesiswaan');
});
Route::get('/osis', function () {
    return view('program.osis');
});
Route::get('/ekstrakulikuler', function () {
    return view('program.eskul');
});
Route::get('/humas', function () {
    return view('program.humas');
});
Route::get('/sarana-prasarana', function () {
    return view('program.saranaprasarana');
});


    // pengumuman
Route::get('/ppdb', function () {
    return view('pengumuman.ppdb');
});
Route::get('/berita-sekolah', function () {
    return view('pengumuman.berita');
});
Route::get('/detail-berita', function () {
    return view('pengumuman.detailberita');
});
Route::get('/prestasi-siswa', function () {
    return view('pengumuman.prestasi');
});



    // galeri
Route::get('/photo', function () {
    return view('galeri.foto');
});
Route::get('/video', function () {
    return view('galeri.video');
});



