<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\Login2Controller;
use App\Http\Controllers\SppController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PembayaranController;

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
// Login
// Route::redirect('/', '/dashboard-general-dashboard',)->middleware('guest');
Route::redirect('/', '/auth-login2',)->middleware('guest');
// Route::post('loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

// Auth
// Route::group(['middleware' => ['auth','checkrole:admin']],function () {
//     Route::get('admin', function () { return view('admin'); })->middleware('checkRole:admin');
//     Route::get('siswa', function () { return view('siswa'); })->middleware(['checkRole:siswa']);
//     Route::get('petugas', function () { return view('petugas'); })->middleware(['checkRole:admin,siswa,petugas']);
// });

Route::group(['middleware'=>['guest']], function(){
    Route::get('/auth-login2', [Login2Controller::class, 'login'])->name('auth-login2');
});
Route::post('/auth-login2', [Login2Controller::class, 'loginproses'])->name('loginproses');

Route::group(['middleware'=>['auth']], function(){
    Route::post('/logout', [Login2Controller::class, 'logout']);
    Route::get('/dashboard-general-dashboard', [HomeController::class, 'index']);
});


// Admin -- Siswa
Route::get('/data-siswa', [SiswaController::class, 'index'])->name('data-siswa')->middleware('auth');
Route::get('/tambah-data-siswa', [SiswaController::class, 'tambah'])->name('tambah-data-siswa');
Route::get('/edit-data-siswa/{id}', [SiswaController::class, 'viewsiswa'])->name('viewsiswa');
Route::post('/updatesiswa/{id}', [SiswaController::class, 'update'])->name('updatesiswa');
Route::post('/insertsiswa', [SiswaController::class, 'store'])->name('insertsiswa');
Route::get('/deletesiswa/{id}', [SiswaController::class, 'destroy'])->name('deletesiswa');

// Petugas
Route::get('/data-user', [PetugasController::class, 'index'])->name('data-user');
Route::get('/tambah-data-user', [PetugasController::class, 'tambah'])->name('tambah-data-user');
Route::get('/edit-data-user/{id}', [PetugasController::class, 'viewpuser'])->name('viewuser');
Route::post('/updateuser/{id}', [PetugasController::class,'update'])->name('updateuser');
Route::post('/insertuser', [PetugasController::class, 'store'])->name('insertuser');
Route::get('/deleteuser/{id}', [PetugasController::class,'destroy'])->name('deleteuser');

// Kelas
Route::get('/data-kelas', [KelasController::class, 'index'])->name('data-kelas');
Route::get('/tambah-data-kelas', [KelasController::class, 'tambah'])->name('tambah-data-kelas');
Route::get('/edit-data-kelas/{id}', [KelasController::class, 'viewkelas'])->name('viewkelas');
Route::post('/updatekelas/{id}', [KelasController::class, 'update'])->name('updatekelas');
Route::post('/insertkelas', [KelasController::class, 'store'])->name('insertkelas');
Route::get('/deletekelas/{id}', [KelasController::class, 'destroy'])->name('deletekelas');

// SPP
Route::get('/data-spp', [SppController::class, 'index'])->name('data-spp');
Route::get('/tambah-data-spp', [SppController::class, 'tambah'])->name('tambah-data-spp');
Route::get('/edit-data-spp/{id}', [SppController::class, 'viewspp'])->name('viewspp');
Route::post('/updatespp/{id}', [SppController::class, 'update'])->name('updatespp');
Route::post('/insertspp', [SppController::class, 'store'])->name('insertspp');
Route::get('/deletespp/{id}', [SppController::class, 'destroy'])->name('deletespp');

// Pembayaran
Route::get('/data-pembayaran', [PembayaranController::class, 'index'])->name('data-pembayaran');
Route::get('/tambah-pembayaran', [PembayaranController::class, 'tambah'])->name('tambah-pembayaran');
Route::get('/edit-data-pembayaran/{id}', [PembayaranController::class, 'viewpembayaran'])->name('viewpembayaran');
Route::post('/updatepembayaran/{id}', [PembayaranController::class, 'update'])->name('updatepembayaran');
Route::post('/insertpembayaran', [PembayaranController::class, 'store'])->name('insertpembayaran');
Route::get('/deletepembayaran/{id}', [PembayaranController::class, 'destroy'])->name('deletepembayaran');

// Hisrtoy Siswa
// Route::get('/history', [HistoryController::class, 'index'])->name('history');
Route::get('/history-pembayaran-siswa', [HistoryController::class, 'index'])->middleware(['auth','checkRole:siswa']);

// Export PDF
Route::get('/pdf-siswa', [SiswaController::class, 'exportPDF'])->name('pdf-siswa');
Route::get('/pdf-user', [PetugasController::class, 'exportPDF'])->name('pdf-user');

// Laporan
Route::get('/laporan-pdf', [LaporanController::class, 'index'])->name('laporan-pdf');







