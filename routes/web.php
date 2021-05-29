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
    return view('welcome');
});

Route::get('/anggota', 'App\Http\Controllers\MainControll@anggota');
Route::get('/buku', 'App\Http\Controllers\MainControll@buku');
Route::get('/petugas', 'App\Http\Controllers\MainControll@petugas');
Route::get('/pinjam', 'App\Http\Controllers\MainControll@pinjam');
Route::get('/kembali', 'App\Http\Controllers\MainControll@kembali');
Route::get('/anggotaLike', 'App\Http\Controllers\MainControll@anggotaLike');
Route::get('/pinjamSelectLike', 'App\Http\Controllers\MainControll@pinjamSelectLike');
