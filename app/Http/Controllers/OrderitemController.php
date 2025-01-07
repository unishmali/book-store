<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\orderitem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderitemController extends Controller
{
    


public function view(){
    $orders = Order::where('user_id', Auth::id())->get();

    $groupedOrders = [];
    foreach ($orders as $order) {
        $groupedOrders[] = [
            'order' => $order,
            'orderItems' => OrderItem::with('cart.product') // Eager load cart and product
                ->where('order_id', $order->id)
                ->get(),
        ];
    }

    // Pass grouped orders to the view
    return view('order.view', compact('groupedOrders'));
}

}
