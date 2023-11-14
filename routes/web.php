<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VaksinasiController;
use App\Http\Controllers\FrontendController;

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



Route::get('/', [FrontendController::class, 'index'])->name('frontend');
Route::get('/fnaddwarga', [FrontendController::class, 'tambahwarga']);
Route::post('/fnsimpanwarga', [FrontendController::class, 'simpanwarga']);
Route::post('/fnsavewarga', [FrontendController::class, 'savewarga']);
// Route::get('/', [FrontendController::class, 'index']);
// Route::get('/pena', function () {
//     return view('frontend.fnaddwarga' );
// });

Route::post('/contact', [FrontendController::class,'submitcontact'])->name('contact.submit');


Route::get('/dashboard', [HomeController::class, 'index']);
Route::get('/login', [HomeController::class, 'index']);



Route::get('/datawarga', [WargaController::class, 'index'])->name('warga');
Route::get('/tambahwarga', [WargaController::class, 'tambahwarga']);
Route::post('/savewarga', [WargaController::class, 'savewarga']);
Route::get('/editwarga/{id}', [WargaController::class, 'editwarga']);
Route::post('/updatewarga/{id}', [WargaController::class, 'updatewarga']);
Route::get('/hapuswarga/{id}',[WargaController::class, 'hapuswarga']);
// Route::get('/datawarga', function () {
//     return view('warga.warga');
// });

Route::get('/datavaksinasi', [VaksinasiController::class, 'index'])->name('vaksinasi');
Route::get('/addvaksin', [VaksinasiController::class, 'addvaksin']);
Route::post('/savevaksin', [VaksinasiController::class, 'savevaksin']);
Route::get('/hapusvaksin/{id_vaksinasi}', [VaksinasiController::class, 'hapusvaksin']);

//PETUGAS
Route::get('/datapetugas', [PetugasController::class, 'index'])->name('petugas');
Route::get('/tambahpetugas', [PetugasController::class, 'addpetugas']);
Route::post('/savepetugas', [PetugasController::class, 'savepetugas']);
Route::get('/hapuspetugas/{id_petugas}',[PetugasController::class, 'hapuspetugas']);
Route::get('/editpetugas/{id_petugas}', [PetugasController::class, 'editpetugas']);
Route::post('/updatepetugas/{id_petugas}', [PetugasController::class, 'updatepetugas']);

Route::get('/dataadmin', [AdminController::class, 'index'])->name('admin');
Route::get('/hapusadmin/{id}',[AdminController::class, 'hapusadmin']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
