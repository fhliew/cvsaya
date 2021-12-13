<?php

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

Route::get('/', function () {
    return view('cvsayahome');
});

Route::get('/attendance', function () {
    return view('cvsayaattendance');
});
Route::get('/profil', function () {
    return view('cvsayaprofil');
});
Route::get('/pekerjaan', function () {
    return view('cvsayapekerjaan');
});
Route::get('/dokumen', function () {
    return view('cvsayadokumen');
});
Route::get('/cv', function () {
    return view('cvsayacv');
});
Route::get('/permission', function () {
    return view('cvsayapermission');
});

Route::get('/resignation', function () {
    return view('cvsayaresignation');
});

Route::get('/salary', function () {
    return view('cvsayasalary');
});

Route::get('/salarydetails', function () {
    return view('cvsayasalarydetails');
});

