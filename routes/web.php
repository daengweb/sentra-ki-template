<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\HakCiptaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PatenController;
use App\Http\Controllers\PatenSederhanaController;
use App\Http\Controllers\PengenalanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

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
Route::get('/',[HomeController::class,'home'])->name('home');
Route::group(['prefix'=>'pendaftaran'], function(){
    Route::get('paten',[PatenController::class,'index'])->name('paten.index');
    Route::post('paten',[PatenController::class,'simpan'])->name('paten.simpan');
    Route::get('paten-sederhana',[PatenSederhanaController::class,'index']);
    Route::get('hak-cipta',[HakCiptaController::class,'index']);
});

Route::group(['prefix'=>'administrator'], function(){
    Route::get('login',[AuthController::class,'showFormLogin'])->name('administartor.showFormLogin');
    Route::post('login',[AuthController::class,'login'])->name('administrator.login');
    Route::group(['middleware'=>'web'], function(){
        Route::get('/dashboard',[AdminHomeController::class,'dashboard'])->name('dashboard.adminDashboard');
        
    });
});

Route::group(['prefix'=>'pengenalan'], function(){
    Route::get('paten',[PengenalanController::class,'paten'])->name('pengenalan.paten');
});

Route::group(['prefix'=>'produk'], function(){
    Route::get('paten',[ProdukController::class,'paten'])->name('produk.paten');
});

Route::group(['prefix'=>'profile'], function(){
    Route::get('strukturOrg',[ProfileController::class,'strukturOrg'])->name('profile.strukturOrg');
});
Route::group(['prefix'=>'contact'], function(){
    Route::get('contactUs',[ContactController::class,'contactUs'])->name('contact.contactUs');
});

