<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\DashboardmasyarakatController;
use App\Http\Controllers\DashboardpetugasController;
use App\Http\Controllers\GeneratereportController;
use App\Http\Controllers\GeneratereportpetugasController;
use App\Http\Controllers\KategoriPengaduanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasyarakatController;  // Import MasyarakatController
use App\Http\Controllers\MasyarakattController;
use App\Http\Controllers\PegawaiController;

use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PengaduanpetugasController;
use App\Http\Controllers\TambahlaporanController;
use App\Http\Controllers\TanggapanController;
use App\Http\Controllers\TanggapannController;
use App\Http\Controllers\TanggapanpetugasController;
use App\Http\Controllers\TentangkamiController;
use Illuminate\Support\Facades\Route;



/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');  // Route to the default welcome page
});

Route::middleware('auth')->group(function () {
    Route::post('/tanggapan/store', [TanggapannController::class, 'store'])->name('tanggapan.store');


    Route::get('/tanggapan/create/{id}', [TanggapannController::class, 'create']);

    Route::get('/dashboardpetugas', [DashboardpetugasController::class, 'index']);
    Route::get('/pengaduanpetugas', [PengaduanpetugasController::class, 'index']);
    Route::put('/pengaduanpetugas/update/{id}', [PengaduanpetugasController::class, 'update']);
    Route::get('/pengaduanpetugas/delete/{pengaduan}', [PengaduanpetugasController::class, 'destroy']);
    Route::post('/pengaduanpetugas/store', [PengaduanpetugasController::class, 'store']);
    Route::get('/pengaduanpetugas/show/{pengaduan}', [PengaduanpetugasController::class, 'show']);
    Route::post('/tanggapanpetugas/store', [TanggapanpetugasController::class, 'store'])->name('tanggapan.storee');
    Route::get('/tanggapanpetugas/create/{id}', [TanggapanpetugasController::class, 'create']);





    Route::get('/admin', [DashboardController::class, 'index']);
    Route::get('/masyarakat', [MasyarakatController::class, 'index']);


    Route::get('/user', [MasyarakattController::class, 'index']);
    Route::get('/userdetail/{id}', [MasyarakattController::class, 'show'])->name('userdetail.show');


    Route::get('/tentang', [TentangkamiController::class, 'index']);
    Route::get('/generatereport', [GeneratereportController::class, 'index']);
    Route::post('/generatereport/print', [GeneratereportController::class, 'print'])->name('generatereport.print');

    Route::get('/generatereportpetugas', [GeneratereportpetugasController::class, 'index']);
    Route::middleware('auth')->get('/laporan', [LaporanController::class, 'index']);
    Route::get('/tambahlaporan', [TambahlaporanController::class, 'index']);
    Route::post('/tambahlaporan/store', [TambahlaporanController::class, 'store']);

    Route::get('/laporan/{id}', [LaporanController::class, 'detail'])->name('laporan.detail');


    Route::get('/kategori', [KategoriPengaduanController::class, 'index']);
    Route::get('/pengaduan', [PengaduanController::class, 'index']);
    Route::get('/pegawai', [PegawaiController::class, 'index']);
    Route::get('/pegawaidetail/{id}', [PegawaiController::class, 'show'])->name('pegawaidetail.show');
    Route::get('/pegawaiedit/{id}', [PegawaiController::class, 'edit'])->name('pegawaiedit.edit');

    Route::get('/tanggapan', [TanggapanController::class, 'index']);
    Route::get('/detailtanggapan{id}', [TanggapanController::class, 'detail']);

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/pengaduan/show/{pengaduan}', [PengaduanController::class, 'show']);
    Route::put('/pengaduan/update/{id}', [PengaduanController::class, 'update']);
});
Route::post('/auth/store', [AuthController::class, 'store'])->name('auth.store');
Route::get('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/indexmasyarakat', [MasyarakatController::class, 'masyarakat']);


Route::post('/authentication', [AuthController::class, 'authenticate']);


Route::middleware('guest')->group(function () {});
