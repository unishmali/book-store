<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shoplist(Request $request){
        $category = category::get();

        $searchQuery = $request->input('query');
        $categorySlug = $request->input('category');
        $product = Product::latest() ;

        if ($searchQuery) {
            $product = $product->where('title', 'LIKE', '%' . $searchQuery . '%') ->orWhere('author', 'LIKE', '%' . $searchQuery . '%');
        }
      
        if ($categorySlug) {
            $categoryData = Category::where('slug', $categorySlug)->first();
            if ($categoryData) {
                $product->where('category_id', $categoryData->id);
            }
        }
        
        $product =  $product->get();
        return view('Shop.shoplist',compact('product','category'));
    }

    public function shopgrid(){
        $product = product::get();
        return view('Shop.grid',compact('product'));
    }

    public function sidebar(Request $request){
        $searchQuery = $request->input('query');
        $product = product::query();

        if ($searchQuery) {
            $product = $product->where('title', 'LIKE', '%' . $searchQuery . '%');
        }
        $product = product::get();
        return view('Shop.sidebar',compact('product'));
    }


    public function detail($slug){
        $product = product::where('slug', $slug)->first();
        return view('Shop.detail',compact('product'));
    }
}
