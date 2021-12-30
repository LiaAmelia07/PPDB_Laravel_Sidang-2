<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\ListDaftarController;
use App\Http\Controllers\VerifikasiController;

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

Route::prefix('ppdb')->group(function(){

    // route untuk tampilan login
    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout']);    

    // route untuk halaman register
    Route::resource('register', UserController::class)->middleware('guest');

    //tampilan user
    Route::get('home', function () {
        return view('user.user');
    })->name('home-user');

    Route::resource('daftar', PendaftaranController::class)->middleware('auth');

    Route::prefix('admin')->group(function(){
        //tampilan  admin
        Route::get('home', function () {
            return view('admin.home');
        })->name('home-admin')->middleware('admin');
    
        Route::resource('jurusan', JurusanController::class)->middleware('admin');
        Route::resource('pendaftaran', ListDaftarController::class)->middleware('admin');
        Route::get('/verifikasi', [VerifikasiController::class, 'index'])->middleware('admin');
        Route::post('/verifikasi', [VerifikasiController::class, 'verifikasi'])->middleware('admin');
    });

});
