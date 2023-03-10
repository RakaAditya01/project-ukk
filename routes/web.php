<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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
Route::post('loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

// Auth
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/auth-login2', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::group(['middleware' => ['auth','checkrole:admin']],function () {
    Route::get('admin', function () { return view('admin'); })->middleware('checkRole:admin');
    Route::get('siswa', function () { return view('siswa'); })->middleware(['checkRole:siswa']);
    Route::get('petugas', function () { return view('petugas'); })->middleware(['checkRole:admin,siswa,petugas']);
});
Route::get('/dashboard-general-dashboard', [HomeController::class, 'index'])->middleware(['auth','checkRole:admin,siswa,petugas']);

// home
Route::get('/dashboard-general-dashboard', [HomeController::class, 'index'])->name('dashboard-general-dashboard');

// Admin -- Siswa
Route::get('/data-siswa', [SiswaController::class, 'index'])->name('data-siswa');
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

















// // Dashboard
// Route::get('/dashboard-general-dashboard', function () {
//     return view('pages.dashboard-general-dashboard', ['type_menu' => 'dashboard']);
// });
Route::get('/dashboard-ecommerce-dashboard', function () {
    return view('pages.dashboard-ecommerce-dashboard', ['type_menu' => 'dashboard']);
});


// Layout
Route::get('/layout-default-layout', function () {
    return view('pages.layout-default-layout', ['type_menu' => 'layout']);
});

// Blank Page
Route::get('/blank-page', function () {
    return view('pages.blank-page', ['type_menu' => '']);
});

// Bootstrap
Route::get('/bootstrap-alert', function () {
    return view('pages.bootstrap-alert', ['type_menu' => 'bootstrap']);
});
Route::get('/bootstrap-badge', function () {
    return view('pages.bootstrap-badge', ['type_menu' => 'bootstrap']);
});
Route::get('/bootstrap-breadcrumb', function () {
    return view('pages.bootstrap-breadcrumb', ['type_menu' => 'bootstrap']);
});
Route::get('/bootstrap-buttons', function () {
    return view('pages.bootstrap-buttons', ['type_menu' => 'bootstrap']);
});
Route::get('/bootstrap-card', function () {
    return view('pages.bootstrap-card', ['type_menu' => 'bootstrap']);
});
Route::get('/bootstrap-carousel', function () {
    return view('pages.bootstrap-carousel', ['type_menu' => 'bootstrap']);
});
Route::get('/bootstrap-collapse', function () {
    return view('pages.bootstrap-collapse', ['type_menu' => 'bootstrap']);
});
Route::get('/bootstrap-dropdown', function () {
    return view('pages.bootstrap-dropdown', ['type_menu' => 'bootstrap']);
});
Route::get('/bootstrap-form', function () {
    return view('pages.bootstrap-form', ['type_menu' => 'bootstrap']);
});
Route::get('/bootstrap-list-group', function () {
    return view('pages.bootstrap-list-group', ['type_menu' => 'bootstrap']);
});
Route::get('/bootstrap-media-object', function () {
    return view('pages.bootstrap-media-object', ['type_menu' => 'bootstrap']);
});
Route::get('/bootstrap-modal', function () {
    return view('pages.bootstrap-modal', ['type_menu' => 'bootstrap']);
});
Route::get('/bootstrap-nav', function () {
    return view('pages.bootstrap-nav', ['type_menu' => 'bootstrap']);
});
Route::get('/bootstrap-navbar', function () {
    return view('pages.bootstrap-navbar', ['type_menu' => 'bootstrap']);
});
Route::get('/bootstrap-pagination', function () {
    return view('pages.bootstrap-pagination', ['type_menu' => 'bootstrap']);
});
Route::get('/bootstrap-popover', function () {
    return view('pages.bootstrap-popover', ['type_menu' => 'bootstrap']);
});
Route::get('/bootstrap-progress', function () {
    return view('pages.bootstrap-progress', ['type_menu' => 'bootstrap']);
});
Route::get('/bootstrap-table', function () {
    return view('pages.bootstrap-table', ['type_menu' => 'bootstrap']);
});
Route::get('/bootstrap-tooltip', function () {
    return view('pages.bootstrap-tooltip', ['type_menu' => 'bootstrap']);
});
Route::get('/bootstrap-typography', function () {
    return view('pages.bootstrap-typography', ['type_menu' => 'bootstrap']);
});


// components
Route::get('/components-article', function () {
    return view('pages.components-article', ['type_menu' => 'components']);
});
Route::get('/components-avatar', function () {
    return view('pages.components-avatar', ['type_menu' => 'components']);
});
Route::get('/components-chat-box', function () {
    return view('pages.components-chat-box', ['type_menu' => 'components']);
});
Route::get('/components-empty-state', function () {
    return view('pages.components-empty-state', ['type_menu' => 'components']);
});
Route::get('/components-gallery', function () {
    return view('pages.components-gallery', ['type_menu' => 'components']);
});
Route::get('/components-hero', function () {
    return view('pages.components-hero', ['type_menu' => 'components']);
});
Route::get('/components-multiple-upload', function () {
    return view('pages.components-multiple-upload', ['type_menu' => 'components']);
});
Route::get('/components-pricing', function () {
    return view('pages.components-pricing', ['type_menu' => 'components']);
});
Route::get('/components-statistic', function () {
    return view('pages.components-statistic', ['type_menu' => 'components']);
});
Route::get('/components-tab', function () {
    return view('pages.components-tab', ['type_menu' => 'components']);
});
Route::get('/components-table', function () {
    return view('pages.components-table', ['type_menu' => 'components']);
});
Route::get('/components-user', function () {
    return view('pages.components-user', ['type_menu' => 'components']);
});
Route::get('/components-wizard', function () {
    return view('pages.components-wizard', ['type_menu' => 'components']);
});

// forms
Route::get('/forms-advanced-form', function () {
    return view('pages.forms-advanced-form', ['type_menu' => 'forms']);
});
Route::get('/forms-editor', function () {
    return view('pages.forms-editor', ['type_menu' => 'forms']);
});
Route::get('/forms-validation', function () {
    return view('pages.forms-validation', ['type_menu' => 'forms']);
});

// google maps
// belum tersedia

// modules
Route::get('/modules-calendar', function () {
    return view('pages.modules-calendar', ['type_menu' => 'modules']);
});
Route::get('/modules-chartjs', function () {
    return view('pages.modules-chartjs', ['type_menu' => 'modules']);
});
Route::get('/modules-datatables', function () {
    return view('pages.modules-datatables', ['type_menu' => 'modules']);
});
Route::get('/modules-flag', function () {
    return view('pages.modules-flag', ['type_menu' => 'modules']);
});
Route::get('/modules-font-awesome', function () {
    return view('pages.modules-font-awesome', ['type_menu' => 'modules']);
});
Route::get('/modules-ion-icons', function () {
    return view('pages.modules-ion-icons', ['type_menu' => 'modules']);
});
Route::get('/modules-owl-carousel', function () {
    return view('pages.modules-owl-carousel', ['type_menu' => 'modules']);
});
Route::get('/modules-sparkline', function () {
    return view('pages.modules-sparkline', ['type_menu' => 'modules']);
});
Route::get('/modules-sweet-alert', function () {
    return view('pages.modules-sweet-alert', ['type_menu' => 'modules']);
});
Route::get('/modules-toastr', function () {
    return view('pages.modules-toastr', ['type_menu' => 'modules']);
});
Route::get('/modules-vector-map', function () {
    return view('pages.modules-vector-map', ['type_menu' => 'modules']);
});
Route::get('/modules-weather-icon', function () {
    return view('pages.modules-weather-icon', ['type_menu' => 'modules']);
});

// auth
Route::get('/auth-forgot-password', function () {
    return view('pages.auth-forgot-password', ['type_menu' => 'auth']);
});
Route::get('/auth-login', function () {
    return view('pages.auth-login', ['type_menu' => 'auth']);
});
Route::get('/auth-login2', function () {
    return view('pages.auth-login2', ['type_menu' => 'auth']);
});
Route::get('/auth-register', function () {
    return view('pages.auth-register', ['type_menu' => 'auth']);
});
Route::get('/auth-reset-password', function () {
    return view('pages.auth-reset-password', ['type_menu' => 'auth']);
});

// error
Route::get('/error-403', function () {
    return view('pages.error-403', ['type_menu' => 'error']);
});
Route::get('/error-404', function () {
    return view('pages.error-404', ['type_menu' => 'error']);
});
Route::get('/error-500', function () {
    return view('pages.error-500', ['type_menu' => 'error']);
});
Route::get('/error-503', function () {
    return view('pages.error-503', ['type_menu' => 'error']);
});

// features
Route::get('/features-activities', function () {
    return view('pages.features-activities', ['type_menu' => 'features']);
});
Route::get('/features-post-create', function () {
    return view('pages.features-post-create', ['type_menu' => 'features']);
});
Route::get('/features-post', function () {
    return view('pages.features-post', ['type_menu' => 'features']);
});
Route::get('/features-profile', function () {
    return view('pages.features-profile', ['type_menu' => 'features']);
});
Route::get('/features-settings', function () {
    return view('pages.features-settings', ['type_menu' => 'features']);
});
Route::get('/features-setting-detail', function () {
    return view('pages.features-setting-detail', ['type_menu' => 'features']);
});
Route::get('/features-tickets', function () {
    return view('pages.features-tickets', ['type_menu' => 'features']);
});

// utilities
Route::get('/utilities-contact', function () {
    return view('pages.utilities-contact', ['type_menu' => 'utilities']);
});
Route::get('/utilities-invoice', function () {
    return view('pages.utilities-invoice', ['type_menu' => 'utilities']);
});
Route::get('/utilities-subscribe', function () {
    return view('pages.utilities-subscribe', ['type_menu' => 'utilities']);
});

// credits
Route::get('/credits', function () {
    return view('pages.credits', ['type_menu' => '']);
});
