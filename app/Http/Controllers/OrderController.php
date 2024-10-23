<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function checkout(){
        $cartItem = cart::with('product')->where('user_id',Auth::id());
        $cartItem = $cartItem->get();
        $subTotal = 0;
        foreach($cartItem as $items){
          $subTotal += $items->product->price * $items->quantity ;
        }
        return view('order.checkout',compact('cartItem','subTotal'));
    }
}
