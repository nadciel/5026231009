<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\KursiController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\MyKaryawanController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', [Link::class, 'helloworld']);

Route::get('bootstrap1', function () {
	return view('bootstrap1');
});

Route::get('ets', function () {
	return view('ets');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('js2', function () {
	return view('js2');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('pertemuan4', function () {
	return view('pertemuan4');
});

Route::get('pertemuan4withtoggle', function () {
	return view('pertemuan4withtoggle');
});

Route::get('frontend', function () {
	return view('frontend');
});

Route::get('dosen', [Link::class, 'index']);

// Route::get('pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [Pegawai2Controller::class, 'formulir']);
Route::post('/formulir/proses', [Pegawai2Controller::class, 'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// crud pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);

// crud kursi
Route::get('/kursi', [KursiController::class, 'index']);
Route::get('/kursi/tambah', [KursiController::class, 'tambah']);
Route::post('/kursi/store', [KursiController::class, 'store']);
Route::get('/kursi/edit/{id}', [KursiController::class, 'edit']);
Route::post('/kursi/update', [KursiController::class, 'update']);
Route::get('/kursi/hapus/{id}', [KursiController::class, 'hapus']);
Route::get('/kursi/cari', [KursiController::class, 'cari']);

// crud keranjangbelanja
Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'index']);
Route::get('/keranjangbelanja/tambah', [KeranjangBelanjaController::class, 'tambah']);
Route::post('/keranjangbelanja/store', [KeranjangBelanjaController::class, 'store']);
Route::get('/keranjangbelanja/hapus/{id}', [KeranjangBelanjaController::class, 'hapus']);

// crud karyawan
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus']);

// crud eas
Route::get('/eas', [MyKaryawanController::class, 'index']);
Route::get('/eas/edit/{kodepegawai}', [MyKaryawanController::class, 'edit']);
Route::post('/eas/update', [MyKaryawanController::class, 'update']);
Route::get('/eas/view/{kodepegawai}', [MyKaryawanController::class, 'view']);