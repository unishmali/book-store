<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function create(){
        $category = category::get();
        return view('Admin.product.create',compact('category'));
    }

    public function  index(){
       $product = product::get();
       return view('Admin.product.index',compact('product'));
    }

    public function store(Request $request){
        $name = Str::slug(Carbon::now()) . '.' . $request->file('photo')->getClientOriginalExtension();
        Storage::disk('public')->putFileAs('images', $request->file('photo'), $name);
       product::create(
        $request->except('photo')+['photo' => $name ]
       );
       return redirect('/product');
    }

    public function detail($id){
        $products = Product::find($id);
        return view('Admin.product.detail',compact('products'));
    }

    public function edit(){
    return view('Admin.product.edit');
}

public function update(Request $request,$id){
    $product = product::find($id);
    $name = Str::slug(Carbon::now()).'.'. $request->file('photo')->getClientOriginalExtension();
    Storage::disk('public')->putFileAs('images',$request->file('photo'),$name);
    $product->update($request->except('photo')+['photo'=>$name]);

    return redirect('/product/index');
}
public function destroy ($id){
    $product = product::find($id);
    Storage::disk('public')->delete('images/' . $product->getRawOriginal('photo'));
    $product->destroy($id);
    return redirect('/product/index');
}
}
