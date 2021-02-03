<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Fontend\IndexController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Fontend\LanguageController;
use App\Http\Controllers\Fontend\CartController;
use App\Http\Controllers\User\WishlistController;
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
    // =================================slider=============================
    Route::get('all-slider',[SliderController::class,'index'])->name('sliders');
    Route::post('slider/store',[SliderController::class,'Store'])->name('slider.store');
    Route::get('slider/edit/{id}',[SliderController::class,'edit'])->name('slider.edit');
    Route::post('slider/update/{id}',[SliderController::class,'update'])->name('slider.update');
    Route::get('active-slider/{id}',[SliderController::class,'active'])->name('slider.active');
    Route::get('disable-slider/{id}',[SliderController::class,'disable'])->name('slider.disable');
    Route::get('slider/delete/{id}',[SliderController::class,'delete'])->name('slider.delete');
    // =================================brand=============================
    Route::get('all-brands',[BrandController::class,'index'])->name('brands');
    Route::post('brand/store',[BrandController::class,'Store'])->name('brand.store');
    Route::get('brand/edit/{id}',[BrandController::class,'edit'])->name('brand.edit');
    Route::post('brand/update/{id}',[BrandController::class,'update'])->name('brand.update');
    Route::get('brand/delete/{id}',[BrandController::class,'delete'])->name('brand.delete');
    // =================================category=============================
    Route::get('category',[CategoryController::class,'index'])->name('category');
    Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('category/update/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::get('category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
    // ==============================subcategory===========================
    Route::get('sub-category',[CategoryController::class,'subindex'])->name('subcategory');
    Route::post('sub-category/store',[CategoryController::class,'substore'])->name('subcategory.store');
    Route::get('sub-category/edit/{id}',[CategoryController::class,'subedit'])->name('subcategory.edit');
    Route::post('sub-category/update/{id}',[CategoryController::class,'subupdate'])->name('subcategory.update');
    Route::get('sub-category/delete/{id}',[CategoryController::class,'subdelete'])->name('subcategory.delete');
    // ==================================sub-subcategory=========================
    Route::get('sub-subcategory',[CategoryController::class,'subsubindex'])->name('sub-subcategory');
    Route::post('sub-subcategory/store',[CategoryController::class,'subsubstore'])->name('sub-subcategory.store');
    Route::get('/get-subcategory', [CategoryController::class,'getsubcategory'])->name('get-subcategory');
    Route::get('/get-subsubcategory', [CategoryController::class,'getsubsubcategory'])->name('get-subsubcategory');
    Route::get('sub-subcategory/edit/{id}',[CategoryController::class,'subsubedit'])->name('sub-subcategory.edit');
    Route::post('sub-subcategory/update/{id}',[CategoryController::class,'subsubupdate'])->name('sub-subcategory.update');
    Route::get('sub-subcategory/delete{id}',[CategoryController::class,'subsubdelete'])->name('sub-subdelete');
    // ============================product=======================
    Route::get('manage-product',[ProductController::class,'index'])->name('product.manage');
    Route::get('view-product/{id}',[ProductController::class,'view'])->name('view-product');
    Route::get('create-product',[ProductController::class,'create'])->name('product.create');
    Route::post('store-product', [ProductController::class,'store'])->name('product.store');
    Route::get('edit-product/{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::post('update-product/{id}',[ProductController::class,'update'])->name('product.update');
    Route::get('active-product/{id}',[ProductController::class,'active'])->name('product.active');
    Route::get('disable-product/{id}',[ProductController::class,'disable'])->name('product.disable');
    Route::get('delete-product/{id}',[ProductController::class,'delete'])->name('product.delete');
});
// =================================User Route==================================
Route::group(['prefix'=>'user','middleware' =>['user','auth'],'namespace'=>'User'], function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::post('profile/update',[UserController::class,'ProfileUpdate'])->name('update.profile');
    Route::get('change/password',[UserController::class,'PassChange'])->name('change.password');
    Route::post('pass/store',[UserController::class,'updatePass'])->name('update.password');
    //view product wishlist
    Route::get('wishlist',[WishlistController::class,'create'])->name('wishlist');
    ///wishlist-product
    Route::get('wishlist-product',[WishlistController::class,'wishlistProduct']);
    //wishlist-product/remove
    Route::get('wishlist-product/remove/{id}',[WishlistController::class,'wishlistRemove']);
});
// =================================Fontend Route==================================
    Route::get('language/english',[LanguageController::class,'english'])->name('english.language');
    Route::get('language/bangla',[LanguageController::class,'bangla'])->name('bangla.language');
    Route::get('single/product/{id}/{slug}',[IndexController::class,'singleProduct']);
    Route::get('product/tag/{tag}',[IndexController::class,'tagWiseProduct']);
    Route::get('product/subsubcategory/{id}/{slug}',[IndexController::class,'subsubcategory']);
    Route::get('product/subcategory/{id}/{slug}',[IndexController::class,'subcategory']);
    //view modal with ajax 
    Route::get('product/view/modal/{id}',[IndexController::class,'productViewAjax']);
    //cart data store cart/data/store
    Route::post('/cart/data/store/{id}',[CartController::class,'addToCart']);
    //product/mini/cart
    Route::get('/product/mini/cart',[CartController::class,'miniCart']);
    //remove mini cart product minicart/product-remove
    Route::get('/minicart/product-remove/{rowId}',[CartController::class,'miniCartRemove']);
    Route::post('/addtowishlist/{id}',[WishlistController::class,'addToWishlist']);
    