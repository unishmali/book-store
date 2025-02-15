<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Order;
use App\Models\orderitem;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
  public function view()
  {




  
   
     
  }

  public function checkout()
  {
    $cartItem = cart::with('product')->where('user_id', Auth::id())->where('status',0);
    $cartItem = $cartItem->get();
    $subTotal = 0;
    foreach ($cartItem as $items) {
      $subTotal += $items->product->price * $items->quantity;
    }
    return view('order.checkout', compact('cartItem', 'subTotal'));
  }


  public function store(Request $request)
  {
   
    $userId = Auth::id();
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
      'user_id' => $userId,
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

           $cart->update(['status' => 1]);

        }
      }
    }
    return redirect('/')->with('success', 'Order placed successfully.');
  }

  public function orderaccept($id){
    $order = Order::find($id);
    if($order){
    $order->update(['status' => 'Accepted']);
    return redirect()->back()->with('success', 'Order accepted successfully!');
    }
  }

  public function ordercancel($id){
    $order = Order::find($id);
    if($order){
      $order->update(['status' => 'Canceled']);
      return redirect()->back();
    }
  }
}
