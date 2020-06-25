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


//Membuat Route Login dan menamai Route Login
Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login/proses', 'LoginController@prosesLogin');

Route::middleware('auth')->group(function() {
    //Mengarahkan ke dashboard
    Route::get('/dashboard', 'DashboardController@index');

    //Mengarahkan ke firstcontroller untuk di cek Autentikasi
    Route::get('/', 'FirstController@index');

    //Mengarahkan ke Ayam
    Route::get('/ayam', 'AyamController@index');
    Route::get('/ayam/tambah', 'AyamController@tambah');
    Route::post('/ayam/tambah', 'AyamController@proses');

    //Untuk melakukan Sync Database
    Route::get('/sync', 'SyncController@index');

    //Melakukan Penjualan Ayam

    //Kasir
    Route::get('/penjualan', 'PenjualanController@index');
    Route::post('/penjualan/tambah', 'PenjualanController@tambah');
    Route::get('/penjualan/history', 'PenjualanController@history');
}); 