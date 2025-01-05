<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Order;
use App\Models\orderitem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
  public function view()
  {
    $orders = Order::whereHas('orderItems.cart', function ($query) {
      $query->where('user_id', Auth::id());
  })
  ->with(['orderItems.cart.product'])
  ->get();
    return view('order.view',compact('orders'));
  }

  public function checkout()
  {
    $cartItem = cart::with('product')->where('user_id', Auth::id());
    $cartItem = $cartItem->get();
    $subTotal = 0;
    foreach ($cartItem as $items) {
      $subTotal += $items->product->price * $items->quantity;
    }
    return view('order.checkout', compact('cartItem', 'subTotal'));
  }


  public function store(Request $request)
  {


    $order = Order::create([
      'province' => $request->province,
      'email' => $request->email,
      'phone' => $request->phone,
      'fname' => $request->fname,
      'lname' => $request->lname,
      'note' => $request->note,
      'address' => $request->address,
      'city' => $request->city,
      'postcode' => $request->postalcode,

    ]);


    if ($order) {
      $cartId = $request->cart_id;
      
      foreach ($cartId as $id) {
        
        $cart = cart::find($id);
      

        if ($cart) {

          orderitem::create([
            'order_id' => $order->id,
            'cart_id' => $cart->id,
          ]);
          $cart->delete();
        }
      }
    }
    return redirect('/');
  }
}
