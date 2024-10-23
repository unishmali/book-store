<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
public function create(){
    return view('Admin.category.create');
}

public function index(){
    $category = category::get();
    return view('Admin.category.index',compact('category'));
}
public function store(Request $request){
    category::create([
         'title' => $request->title,
    ]);
    return redirect('/category');

}

public function edit($id){
    category::find($id);
    return view('category.edit');
}

public function update(Request $request,$id){
    $category = category::find($id);
    $category->update($request->all());
    return redirect('/category/index');
}
public function destroy($id){
    $category = category::find($id);
    $category->destroy($id);
    return redirect('/category/index');
}
}
