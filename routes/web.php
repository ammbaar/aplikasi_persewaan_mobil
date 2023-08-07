<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PeminjamanMobilController;
use App\Http\Controllers\PengembalianMobilController;

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

Auth::routes();

//Login
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

//Register
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::group(['middleware' => 'prevent-back-history'],function(){
    Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
    Route::get('akun/{id}', [LoginController::class, 'akun'])->name('akun')->middleware('auth');
    Route::put('akun/update/{id}', [LoginController::class, 'update_akun'])->name('update_akun')->middleware('auth');
    Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

    //Mobil
    Route::get('mobil', [MobilController::class, 'mobil'])->name('mobil')->middleware('auth');
    Route::get('mobil/tambah', [MobilController::class, 'tambah_mobil'])->name('tambah_mobil')->middleware('auth');
    Route::post('mobil/insert', [MobilController::class, 'insert_mobil'])->name('insert_mobil')->middleware('auth');
    Route::get('mobil/ubah/{id}', [MobilController::class, 'ubah_mobil'])->name('ubah_mobil')->middleware('auth');
    Route::put('mobil/update/{id}', [MobilController::class, 'update_mobil'])->name('update_mobil')->middleware('auth');

    //Peminjaman Mobil
    Route::get('peminjaman_mobil', [PeminjamanMobilController::class, 'peminjaman_mobil'])->name('peminjaman_mobil')->middleware('auth');
    Route::get('peminjaman_mobil/tambah', [PeminjamanMobilController::class, 'tambah_peminjaman_mobil'])->name('tambah_peminjaman_mobil')->middleware('auth');
    Route::post('peminjaman_mobil/insert', [PeminjamanMobilController::class, 'insert_peminjaman_mobil'])->name('insert_peminjaman_mobil')->middleware('auth');
    Route::get('peminjaman_mobil/ubah/{id}', [PeminjamanMobilController::class, 'ubah_peminjaman_mobil'])->name('ubah_peminjaman_mobil')->middleware('auth');
    Route::put('peminjaman_mobil/update/{id}', [PeminjamanMobilController::class, 'update_peminjaman_mobil'])->name('update_peminjaman_mobil')->middleware('auth');

    //Pengembalian Mobil
    Route::get('pengembalian_mobil', [PengembalianMobilController::class, 'pengembalian_mobil'])->name('pengembalian_mobil')->middleware('auth');
    Route::get('pengembalian_mobil/form/{id}', [PengembalianMobilController::class, 'form_pengembalian_mobil'])->name('form_pengembalian_mobil')->middleware('auth');
    Route::put('pengembalian_mobil/update/{id}', [PengembalianMobilController::class, 'update_pengembalian_mobil'])->name('update_pengembalian_mobil')->middleware('auth');
});
