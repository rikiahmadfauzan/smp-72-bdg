<?php

use App\Http\Controllers\AdminContoller;
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
route::get('/home', [AdminContoller::class, 'home']);
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

Route::get('/struktur-organisasi', function () {
return view('profil.struktur');
});
Route::get('/fasilitas', function () {
return view('profil.fasilitas');
});
route::get('/guru-staff', [AdminContoller::class, 'showGurustaff']);
route::get('/kepala-sekolah', [AdminContoller::class, 'showKepalasekolah']);


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
Route::get('/lay', function () {
    return view('admin.layAdmin');
});

    //admin

route::get('/admin-profil-guru', [AdminContoller::class, 'showGuru']);
route::get('/admin-profil-staff', [AdminContoller::class, 'showStaff']);
route::get('/admin-profil-jumlah', [AdminContoller::class, 'showJumlah']);
route::get('/admin-profil-kepsek', [AdminContoller::class, 'showKepsek']);
route::get('/admin', [AdminContoller::class, 'show']);
    // guru
route::post('/admin/createGuru', [AdminContoller::class, 'createGuru']);
Route::get('/admin/hapusGuru/{id}', [AdminContoller::class, 'deleteGuru']);
    // staff
route::post('/admin/createStaff', [AdminContoller::class, 'createStaff']);
Route::get('/admin/hapusStaff/{id}', [AdminContoller::class, 'deleteStaff']);
    //Jumlah
route::post('/admin/createJumlah', [AdminContoller::class, 'createJumlah']);
Route::get('/admin/hapusJumlah/{id}', [AdminContoller::class, 'deleteJumlah']);

Route::get('/alex', function () {
    return "Hello World!";
});
