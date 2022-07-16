<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
   public function show($id)
   {

   $product = Product::findOrFail($id);

        $cart = Cart::create([
            'user_id' => Auth::user()->id,
            'product_id' => $product->id,
            
        ]);

        return redirect()->back()->with('message', 'product add to cart successfully');
   }
}
