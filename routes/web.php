<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendudukController;

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
Route::get('/', ['middleware' =>'guest', function(){
    return view('auth.login');
  }]);


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin-home')->middleware('is_admin');

Route::get('/admin/penduduk', [PendudukController::class, 'index'])->name('penduduk.index')->middleware('is_admin');
Route::get('/admin/penduduk/create', [PendudukController::class, 'create'])->name('penduduk.create')->middleware('is_admin');

// Route::prefix('admin')->group(function(){
//   Route::resource('penduduk', PendudukController::class)->middleware('is_admin');
// });