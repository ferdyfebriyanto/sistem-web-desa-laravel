<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\KartuKeluargaController;
use App\Http\Controllers\KelahiranController;
use App\Http\Controllers\MeninggalController;
use App\Http\Controllers\PendatangController;
use App\Http\Controllers\PindahController;

Route::get('/', ['middleware' =>'guest', function(){
    return view('auth.login');
  }]);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::prefix('admin')->group(function(){
  Route::resource('penduduk', PendudukController::class)->middleware('is_admin');
  Route::resource('kartukeluarga', KartuKeluargaController::class)->middleware('is_admin');
  Route::resource('kelahiran', KelahiranController::class)->middleware('is_admin');
  Route::resource('meninggal', MeninggalController::class)->middleware('is_admin');
  Route::resource('pendatang', PendatangController::class)->middleware('is_admin');
  Route::resource('pindah', PindahController::class)->middleware('is_admin');
});