<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\WishlistController;
use App\Models\product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/shop',[ShopController::class,'shoplist']);
Route::get('/shop/grid',[ShopController::class,'shopgrid']);
Route::get('/shop/grid',[ShopController::class,'shopgrid']);
Route::get('/shop/slidebar',[ShopController::class,'slidebar']);

Route::get('services',function(){
    return view('pages.services');
});
Route::get('/privacypolicy',function(){
    return view('pages.privacy');
});
Route::get('/faqs',function(){
    return view('pages.faq');
});
Route::get('/helpdesk',function(){
    return view('pages.helpdesk');
});
Route::get('/product/detail/{slug}',[ShopController::class,'detail']);
 
Route::get('/blog',[BlogController::class,'blog']);

Route::get('/contact',[ContactController::class,'contact']);
Route::get('/shop/slidebar',[ShopController::class,'shopslidebar']);
Route::get('/search', [BookController::class, 'search']);






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // category
    Route::get('/category',[CategoryController::class,'create']);
    Route::post('/category/post',[CategoryController::class,'store']);
    Route::get('/category/index',[CategoryController::class,'index']);
    Route::delete('/category/delete/{id}',[CategoryController::class,'destroy']);
    // product
    Route::get('/product',[ProductController::class,'create']);
    Route::post('/product/post',[ProductController::class,'store']);
    Route::get('/product/index',[ProductController::class,'index']);
    Route::delete('/product/delete/{id}',[ProductController::class,'destroy']);
    Route::get('/adminproduct/detail/{id}',[ProductController::class,'detail']);
    //cart
    Route::post('/product/cart/{id}',[CartController::class,'store']);

    Route::get('/cart',[CartController::class,'cart']);

    Route::get('/checkout',[OrderController::class,'checkout']);
    Route::get('/wishlist',[WishlistController::class,'wishlist']);
   Route::post('/wishlist/{id}',[WishlistController::class,'store']);
});

require __DIR__.'/auth.php';
