<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.create-product', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([]);

       
        $file = $request->file('image')->store('image', 'thumbnails');
        $product = Product::create([
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'image' => $file,
            'price' => $request->price,
            'category_id' => $request->category_id,
           

        ]);
        return redirect()->back()->with('message', 'Product Created Succsessfully');
    }



}
