<?php
namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
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




Route::get('/',[Admin\Auth\LoginController::class,'LoginForm'])->name('login-form');





Auth::routes(['verify'=>true]);
Route::prefix('admin')->group(function(){

    Route::get('/register-form',[Admin\Auth\LoginController::class,'RegisterForm'])->name('register-form');
    Route::post('/logining',[Admin\Auth\LoginController::class,'logining'])->name('admin.logining');
    Route::post('/register',[Admin\Auth\LoginController::class,'register'])->name('user.register');
    Route::get('/buku', [BukuController::class,'index'])->name('bukuhome');
    Route::get('/homeuser', [BukuController::class,'user'])->name('homeuser');
    
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/create', [BukuController::class,'create'])->name('create-form');
Route::post('/addbuku', [BukuController::class,'store'])->name('daftar-buku');
Route::get('/buku', [BukuController::class,'index'])->name('bukuhome');
Route::get('/homeuser', [BukuController::class,'user'])->name('homeuser');




// Pinjam Buku
Route::get('/addpinjaman/{id}',[PeminjamanController::class,'pinjam']);

// Data Peminjaman
Route::get('/data',[PeminjamanController::class,'index'])->name('data-peminjaman');
Route::get('/adddata/{id}',[PeminjamanController::class,'edit']);



//Edit Data Buku
Route::get('/buku/edit/{id}',[BukuController::class,'edit']);
Route::post('/buku/update',[BukuController::class,'update']);



// Hapus Data Buku
Route::get('/buku/hapus/{id}',[BukuController::class,'hapus']);

//Logout
Route::get('/logout', [LogoutController::class,'perform']);

Route::get('/clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cleared!";

});