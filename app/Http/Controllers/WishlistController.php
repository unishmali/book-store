<?php

namespace App\Http\Controllers;

use App\Models\wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function wishlist()
    {
        $wishlist = wishlist::with('product')->where('user_id',Auth::id());
        $wishlist = $wishlist->get();
        return view('wishlist.wishlist',compact('wishlist'));
    }

    public function store(Request $request)
    {
        $userId = Auth::id();
        $productId = $request->product_id;
        $productInCart = wishlist::where('user_id', $userId)->where('product_id', $productId)->first();
        if ($productInCart) {
            return redirect('/shop')->with(['message' => 'product is already exist in wishlist']);
        } else {
            wishlist::create([
                'user_id' => $userId,
                'product_id' => $productId,


            ]);
            return redirect('/shop')->with(['message' => 'product added successfully']);
        }
    }
}
