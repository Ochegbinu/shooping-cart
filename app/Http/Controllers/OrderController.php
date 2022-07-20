<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function create (Request $request)
    {

        
        $carts = Cart::where('user_id', Auth::user()->id)->get();

       
    

        $transaction = Transaction::create([
            'user_id' => Auth::user()->id,
            'amount' => $request->total,
            'status' => 'Succssfull',

        ]);
        foreach ($carts as $cart) {
            $order = Order::create([
                'user_id' => Auth::user()->id,
                'product_id' => $cart->product_id,
                'transaction_id' => $transaction->id,
                'note' => $request->note,
            ]);
        }
        $carts->each->delete();
        return redirect()->back()->with('message', 'Order Placed successfully');
    }
}
