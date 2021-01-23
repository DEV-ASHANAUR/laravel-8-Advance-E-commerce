<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fontend\IndexController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\User\UserController;
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

Route::get('/',[IndexController::class,'index']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// =================================Admin Route==================================
Route::group(['prefix'=>'admin','middleware' =>['admin','auth'],'namespace'=>'Admin'], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::post('profile/update',[AdminController::class,'profileUpdate'])->name('profile.update');
    Route::get('password/change',[AdminController::class,'PassChange'])->name('admin.password');
    Route::post('password/update',[AdminController::class,'PassUpdate'])->name('password.update');
    // =================================brand=============================
    Route::get('all-brands',[BrandController::class,'index'])->name('brands');
});
// =================================User Route==================================
Route::group(['prefix'=>'user','middleware' =>['user','auth'],'namespace'=>'User'], function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::post('profile/update',[UserController::class,'ProfileUpdate'])->name('update.profile');
    Route::get('change/password',[UserController::class,'PassChange'])->name('change.password');
    Route::post('pass/store',[UserController::class,'updatePass'])->name('update.password');
});
// =================================Fontend Route==================================