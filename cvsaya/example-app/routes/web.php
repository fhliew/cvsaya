<?php
namespace App\Http\Controllers;
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
Route::get('/', [Pagecontroller::class, 'gotopage']);
Route::get('/profil', [ProfilController::class, 'show']);
Route::get('/pekerjaan', [PekerjaanController::class, 'show']);


//Route::get('/{page?}', [Pagecontroller::class, 'gotopage']);
Route::get('/cv/{page?}', [Pagecontroller::class, 'gotopage']);

Route::post('/cv/input',[Inputmanager::class, 'inputdata']);
Route::post('input',[Inputmanager::class, 'inputdatapekerjaan']);
Route::post('/profil/input',[Inputmanager::class, 'inputdataprofil']);

?>