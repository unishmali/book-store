<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\product;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
  public function cart()
  {
    $cartItem = cart::with('product')->where('user_id', Auth::id())->where('status',0);
    $cartItem = $cartItem->get();
    $subTotal = 0;
    foreach ($cartItem as $items) {
      $subTotal += $items->product->price * $items->quantity;
    }
    return view('Cart.cart', compact('cartItem', 'subTotal'));
  }


  public function store(Request $request)
  {
 
    $userId = Auth::id();
    $productId = $request->product_id;
    $productInCart = cart::where('user_id', $userId)->where('product_id', $productId)->where('status',0)->first();
    if ($productInCart) {
      return back()->with('message','Book is already available in your Cart');
    } else {
      cart::create([
        'user_id' => $userId,
        'product_id' => $productId,
        'quantity' => $request->quantity,

      ]);
      return back()->with('message','Book has been added to your cart');
    }
  }

  public function destroy($id){
    $cart =  Cart::find($id);
   $cart->destroy($id);
   return redirect('/cart')->with('message','Book Has Been Deleted With Your Cart');
  }
}
