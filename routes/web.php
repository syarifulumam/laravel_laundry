<?php

use App\Http\Controllers\OperatorController;
use App\Http\Controllers\PaketLaundryController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', [OperatorController::class]);

// Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
// Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create');
// Route::post('/transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');
// Route::get('/transaksi/{id}', [TransaksiController::class, 'edit'])->name('transaksi.edit');
// Route::put('/transaksi/{id}', [TransaksiController::class, 'update'])->name('transaksi.update');
// Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');
Route::resource('/transaksi', TransaksiController::class);

// Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
// Route::get('/pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan.create');
// Route::post('/pelanggan', [PelangganController::class, 'store'])->name('pelanggan.store');
// Route::get('/pelanggan/{id}', [PelangganController::class, 'edit'])->name('pelanggan.edit');
// Route::put('/pelanggan/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');
// Route::delete('/pelanggan/{id}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');
Route::resource('/pelanggan', PelangganController::class);

// Route::get('/paket_laundry', [PaketLaundryController::class, 'index'])->name('paket_laundry.index');
// Route::get('/paket_laundry/create', [PaketLaundryController::class, 'create'])->name('paket_laundry.create');
// Route::post('/paket_laundry', [PaketLaundryController::class, 'store'])->name('paket_laundry.store');
// Route::get('/paket_laundry/{id}', [PaketLaundryController::class, 'edit'])->name('paket_laundry.edit');
// Route::put('/paket_laundry/{id}', [PaketLaundryController::class, 'update'])->name('paket_laundry.update');
// Route::delete('/paket_laundry/{id}', [PaketLaundryController::class, 'destroy'])->name('paket_laundry.destroy');
Route::resource('/paket_laundry', PaketLaundryController::class);

Route::resource('/operator', OperatorController::class);
