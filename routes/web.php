<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ValidateController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/beranda', function(){
//     return view('beranda');
// });

// Route::get('dosen', [DosenController::class, 'index']);

// //pengambilan data melalui URl
// Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

// //pengambilan data melalui inputan
// Route::get('/formulir', [PegawaiController::class, 'formulir']);
// Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
//==========================================================================================

//route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//menampilkan data dari database
Route::get('/', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
//untuk proses simpan data
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
//untuk proses update data
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
//untuk proses cari data
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);
// //untuk validate input
// Route::get('/input', [ValidateController::class], 'input');
// Route::post('/proses', [ValidateController::class], 'proses' );
