<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function search(Request $request)
    {
        $query = $request->input('query');
        $books = product::where('title', 'like', "%$query%")
                     ->take(10) // Limit the number of results
                     ->get(['id', 'title']); // Fetch only necessary fields
        
        return response()->json($books);
    }
    

}
