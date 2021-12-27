<?php
namespace App\Http\Controllers;
use App\Http\Controllers\CvControllers\KualifikasiController;
use App\Http\Controllers\CvControllers\PendidikanController;
use App\Http\Controllers\CvControllers\PengalamanController;
use App\Http\Controllers\InformationsMasking;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Inputmanager;
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

//front page
Route::get('/', [HomeController::class, 'show']);
//dokumen
Route::get('/dokumen', [DokumenController::class, 'show']);
Route::post('/dokumen/submit', [DokumenController::class, 'insert']);

//Profil
Route::get('/profil', [ProfilController::class, 'show']);
Route::post('/profil/submit', [ProfilController::class, 'insert']);

//pekerjaan
Route::get('/pekerjaan', [PekerjaanController::class, 'show']);
Route::post('/pekerjaan/submit', [PekerjaanController::class, 'insert']);

//cv kualifikasi
Route::get('/cv/kualifikasi', [KualifikasiController::class, 'show']);
Route::get('/cv/kualifikasi/aksi/{IDkualifikasi}', [KualifikasiController::class, 'goToedit']);
Route::post('/cv/kualifikasi/edit/submit', [KualifikasiController::class, 'edit']);
Route::post('/cv/kualifikasi/submit', [KualifikasiController::class, 'insert']);

//cv Pendidikan
Route::get('/cv/pendidikan', [PendidikanController::class, 'show']);
Route::get('/cv/pendidikan/aksi/{idpendidikan}', [PendidikanController::class, 'goToedit']);
Route::post('/cv/pendidikan/edit/submit', [PendidikanController::class, 'edit']);
Route::post('/cv/pendidikan/submit', [PendidikanController::class, 'insert']);

//cv Pengalaman
Route::get('/cv/pengalaman', [PengalamanController::class, 'show']);
Route::get('/cv/pengalaman/aksi/{idpengalaman}', [PengalamanController::class, 'goToedit']);
Route::post('/cv/pengalaman/edit/submit', [PengalamanController::class, 'edit']);
Route::post('/cv/pengalaman/submit', [PengalamanController::class, 'insert']);

?>