<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shoplist(){
        $category = category::get();
        $product = Product::with('category') ;
        $product =  $product->get();
        return view('Shop.shoplist',compact('product','category'));
    }

    public function shopgrid(){
        $product = product::get();
        return view('Shop.grid',compact('product'));
    }

    public function shopslidebar(){
        $product = product::get();
        return view('Shop.sidebar',compact('product'));
    }


    public function detail($slug){
        $product = product::where('slug', $slug)->first();
        return view('Shop.detail',compact('product'));
    }
}
