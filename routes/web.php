<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderitemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\WishlistController;
use App\Models\Order;
use App\Models\orderitem;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $recommend = product::where('bestselling' , 'yes')->take(7)->get();
    $feature = product::where('feature','yes')->take(6)->get();
    $sale = product::latest()->take(6)->get();
    $offer = product::where('offer','yes')->take(6)->get();
    return view('home',compact('recommend','feature','sale','offer'));
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/shop',[ShopController::class,'shoplist']);
Route::get('/shop/sidebar',[ShopController::class,'sidebar']);

Route::get('/search', [ShopController::class, 'shoplist']);


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








Route::get('/dashboard', function () {
    if(Auth::id()){
        $usertype = Auth::user()->usertype;
        if($usertype === 'admin'){

            $orders = Order::latest()->get();

            $groupedOrders = [];
            foreach ($orders as $order) {
                $groupedOrders[] = [
                    'order' => $order,
                    'orderItems' => orderitem::with('cart.product') // Eager load cart and product
                        ->where('order_id', $order->id)
                        ->get(),
                ];
            }
            return view('dashboard',compact('groupedOrders'));
        }
        else{
            return redirect('/');
        }
    }
  
    
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
    Route::patch('/product/update/{id}',[ProductController::class,'update']);
    Route::delete('/product/delete/{id}',[ProductController::class,'destroy']);
    Route::get('/adminproduct/detail/{id}',[ProductController::class,'detail']);
    Route::get('/product/edit/{id}',[ProductController::class,'edit']);
    //cart
    Route::post('/product/cart/{id}',[CartController::class,'store']);

    Route::get('/cart',[CartController::class,'cart']);

    Route::get('/checkout',[OrderController::class,'checkout']);
    Route::get('/wishlist',[WishlistController::class,'wishlist']);
   Route::post('/wishlist/{id}',[WishlistController::class,'store']);
   //order
   Route::get('/myorder',[OrderitemController::class,'view']);
   Route::post('/order/store',[OrderController::class,'store']);
   Route::get('/order/accept/{id}',[OrderController::class,'orderaccept']);
   Route::get('/order/cancel/{id}',[OrderController::class,'ordercancel']);
});

require __DIR__.'/auth.php';
