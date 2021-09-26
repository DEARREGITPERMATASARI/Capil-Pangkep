<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PerkembanganController;
use App\Http\Controllers\DemografiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChartJsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


Route::get('berita', [BeritaController::class, 'getAll'])->name('berita'); //get all
Route::post('insert-berita', [BeritaController::class, 'insert'])->name('berita'); //insert
Route::put('update-berita/{id_berita}', [BeritaController::class, 'update'])->name('berita'); //update
Route::delete('delete-berita/{id_berita}', [BeritaController::class, 'delete'])->name('berita'); //delete
// Route::resource('/berita', BeritaController::class);

Route::get('galeri', [GaleriController::class, 'getAll'])->name('galeri'); //get all
Route::post('insert-foto', [GaleriController::class, 'insert'])->name('galeri'); //insert
Route::put('update-foto/{id_foto}', [GaleriController::class, 'update'])->name('galeri'); //update
Route::delete('delete-foto/{id_foto}', [GaleriController::class, 'delete'])->name('galeri'); //delete

Route::get('produk-hukum', [ProdukController::class, 'getAll'])->name('produk_hukum'); //get all
Route::post('insert-produk', [ProdukController::class, 'insert'])->name('produk_hukum'); //insert
Route::put('update-produk/{id_file}', [ProdukController::class, 'update'])->name('produk_hukum'); //update
Route::delete('delete-produk/{id_file}', [ProdukController::class, 'delete'])->name('produk_hukum'); //delete

Route::get('perkembangan-penduduk', [PerkembanganController::class, 'getAll'])->name('perkembangan_penduduk'); //get all
Route::post('insert-perkembangan', [PerkembanganController::class, 'insert'])->name('perkembangan_penduduk'); //
Route::put('update-perkembangan/{id_perkembangan}', [PerkembanganController::class, 'update'])->name('perkembangan_penduduk'); //update
Route::delete('delete-perkembangan/{id_perkembangan}', [PerkembanganController::class, 'delete'])->name('perkembangan_penduduk'); //delete

Route::get('data-demografi', [DemografiController::class, 'getAll'])->name('data_demografi'); //get all
Route::post('insert-demografi', [DemografiController::class, 'insert'])->name('data_demografi'); //insert
Route::put('update-demografi/{id_demografi}', [DemografiController::class, 'update'])->name('data_demografi'); //update
Route::delete('delete-demografi/{id_demografi}', [DemografiController::class, 'delete'])->name('data_demografi'); //delete

Route::get('/', function () {
    return view('home');
});

//USER
Route::get('/home', [DashboardController::class, 'getBerita'])->name('user.home'); //get all
Route::get('/galeri-user', [DashboardController::class, 'getGaleri'])->name('user.galeri'); //get all
Route::get('/produkHukum', [DashboardController::class, 'getProduk'])->name('user.produk_hukum'); //get all
Route::get('/perkembanganPenduduk', [DashboardController::class, 'getPerkembangan'])->name('user.perkembangan_penduduk'); //get all
Route::get('/dataDemografi', [DashboardController::class, 'getData'])->name('user.data_demografi'); //get all
Route::get('/grafik', [ChartJsController::class, 'getData'])->name('user.grafik'); //get all
Route::get('/detaildataDemografi/{id}', [DashboardController::class, 'getByTahun'])->name('user.detail_demografi'); //get all


Route::get('/produkDukcapil', function () {
    return view('user.produk_dukcapil');
});

Route::get('/peta', function () {
    return view('user.peta');
});

// Route::get('/grafik', function () {
//     return view('grafik');
// });