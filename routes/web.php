<?php

use App\Http\Controllers\DashboardPostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginCusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\NeracaController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\RiwayatController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [CatalogController::class, 'customer'])->name('home');
Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth');;
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function() {
  Route::get('/pengguna', [PenggunaController::class, 'index'])->name('pengguna.index');
  Route::get('/pengguna/create', [PenggunaController::class, 'create'])->name('pengguna.create');
  Route::post('/pengguna/create', [PenggunaController::class, 'store'])->name('pengguna.store');
  Route::get('/pengguna/{user}/edit', [PenggunaController::class, 'edit'])->name('pengguna.edit');
  Route::post('/pengguna/{user}/edit', [PenggunaController::class, 'update'])->name('pengguna.update');
  Route::get('/pengguna/{user}/destroy', [PenggunaController::class, 'destroy'])->name('pengguna.destroy');

  Route::resource('/kategori', KategoriController::class);

  Route::resource('/transaksi', TransaksiController::class);
  Route::resource('/riwayat', RiwayatController::class);

  Route::get('/neraca/excel', [NeracaController::class, 'toExcel'])->name('neraca.toExcel');
  Route::resource('/neraca', NeracaController::class);
  Route::resource('/katalog', CatalogController::class);
});

Route::name('customer.')->prefix('/customer')->group(function() {
  Route::get('/login',  [LoginCusController::class, 'index'])->name('login');
  Route::post('/login', [LoginCusController::class, 'authenticate'])->name('auth');;
  Route::get('/logout', [LoginCusController::class, 'logout'])->name('logout');

  Route::get('/katalog', [CatalogController::class, 'customer'])->name('katalog');

  Route::get('/pembelian',  [PembelianController::class, 'index'])->name('pembelian');

  Route::get('/pembelian/{pembelian}/return',  [PembelianController::class, 'return_barang'])->name('return');
  Route::get('/pembelian/{pembelian}/batal',  [PembelianController::class, 'batal'])->name('batal_beli');

  Route::get('/{katalog}/pembelian',  [PembelianController::class, 'beli'])->name('beli');


});

