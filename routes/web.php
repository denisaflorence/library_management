<?php
namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\BukuController;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use Auth;
//use App\Http\Controllers\Admin\Auth\LoginController; //

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



Route::get('/',[Admin\HomeController::class,'user'])->name('user.home');

Route::resource('mahasiswa',mahasiswaController::class);


Auth::routes(['verify'=>true]);
Route::prefix('admin')->group(function(){
    Route::get('/',[Admin\Auth\LoginController::class,'LoginForm'])->name('login-form');
    Route::get('/register-form',[Admin\Auth\LoginController::class,'RegisterForm'])->name('register-form');
    Route::post('/logining',[Admin\Auth\LoginController::class,'logining'])->name('admin.logining');
    Route::post('/register',[Admin\Auth\LoginController::class,'register'])->name('user.register');
    Route::get('/home',[Admin\HomeController::class,'index'])->name('admin.home');
    
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/create', [BukuController::class,'create'])->name('create-form');
Route::post('/addbuku', [BukuController::class,'addbook'])->name('daftar-buku');
Route::get('/buku', [BukuController::class,'index'])->name('bukuhome');
Route::get('/homeuser', [BukuController::class,'user'])->name('homeuser');
// Route::post('/add',[BukuController::class,'store'])->name('storedata');
// Route::resource('Buku',BukuController::class);
Route::get('/addpinjaman',[BukuController::class,'pinjam']);

// Route::get('/clear', function() {

//     Artisan::call('cache:clear');
//     Artisan::call('config:clear');
//     Artisan::call('config:cache');
//     Artisan::call('view:clear');
//     Artisan::call('route:clear');

//     return "Cleared!";

// });