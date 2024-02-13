<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/pegawai', [App\Http\Controllers\PegawaiController::class, 'index']);
Route::get('/pegawai/cari', [App\Http\Controllers\PegawaiController::class, 'cari']);
Route::post('/pegawai/cari', [App\Http\Controllers\PegawaiController::class, 'store']);
Route::get('/student', [App\Http\Controllers\StudentController::class, 'index']);
Route::post('/store-input-fields', [App\Http\Controllers\StudentController::class, 'store']);
