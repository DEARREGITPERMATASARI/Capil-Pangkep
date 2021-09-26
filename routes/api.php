<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\DemografiController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PerkembanganController;
use App\Http\Controllers\ChartJSController;

Route::post('login', [LoginController::class,'login']);
// Route::post('register', [LoginController::class,'register']);

//Chart
Route::get('chartjs', [ChartJsController::class,'index'])->name('chartjs.index');

Route::group(['middleware' => ['jwt.verify']], function () {
    Route::get('login/check', [LoginController::class,'loginCheck']);
    Route::post('logout', [LoginController::class,'logout']);

    //Berita
	Route::get('berita', [BeritaController::class, 'getAll']); //get all
	Route::get('berita/{id_berita}', [BeritaController::class, 'getById']); //get all
	Route::get('berita/{limit}/{offset}', [BeritaController::class, 'getAll']); //get all dengan limit
    Route::post('berita', [BeritaController::class, 'insert']); //insert
    Route::put('berita/{id_berita}', [BeritaController::class, 'update']); //update
    Route::delete('berita/{id_berita}', [BeritaController::class, 'delete']); //delete

    //Galeri
	Route::get('galeri', [GaleriController::class, 'getAll']); //get all
	Route::get('galeri/{id_foto}', [GaleriController::class, 'getById']); //get all
	Route::get('galeri/{limit}/{offset}', [GaleriController::class, 'getAll']); //get all dengan limit
    Route::post('galeri', [GaleriController::class, 'insert']); //insert
    Route::put('galeri/{id_foto}', [GaleriController::class, 'update']); //update
    Route::delete('galeri/{id_foto}', [GaleriController::class, 'delete']); //delete

    //Data Demografi
	Route::get('data-demografi', [DemografiController::class, 'getAll']); //get all
	Route::get('data-demografi/{id_demografi}', [DemografiController::class, 'getById']); //get all
	Route::get('data-demografi/{limit}/{offset}', [DemografiController::class, 'getAll']); //get all dengan limit
    Route::post('data-demografi', [DemografiController::class, 'insert']); //insert
    Route::put('data-demografi/{id_demografi}', [DemografiController::class, 'update']); //update
    Route::delete('data-demografi/{id_demografi}', [DemografiController::class, 'delete']); //delete

    
    //Produk Hukum
	Route::get('produk-hukum', [ProdukController::class, 'getAll']); //get all
	Route::get('produk-hukum/{id_file}', [ProdukController::class, 'getById']); //get all
	Route::get('produk-hukum/{limit}/{offset}', [ProdukController::class, 'getAll']); //get all dengan limit
    Route::post('produk-hukum', [ProdukController::class, 'insert']); //insert
    Route::put('produk-hukum/{id_file}', [ProdukController::class, 'update']); //update
    Route::delete('produk-hukum/{id_file}', [ProdukController::class, 'delete']); //delete

    
    //Perkembangan Penduduk
	Route::get('perkembangan-penduduk', [PerkembanganController::class, 'getAll']); //get all
	Route::get('perkembangan-penduduk/{id_perkembangan}', [PerkembanganController::class, 'getById']); //get all
	Route::get('perkembangan-penduduk/{limit}/{offset}', [PerkembanganController::class, 'getAll']); //get all dengan limit
    Route::post('perkembangan-penduduk', [PerkembanganController::class, 'insert']); //insert
    Route::put('perkembangan-penduduk/{id_perkembangan}', [PerkembanganController::class, 'update']); //update
    Route::delete('perkembangan-penduduk/{id_perkembangan}', [PerkembanganController::class, 'delete']); //delete

    
});