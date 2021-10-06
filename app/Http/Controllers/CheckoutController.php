<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function checkout(){
        $carts =  Cart::select('product_id', DB::raw('count(*) as total'))
            ->groupBy('product_id')
            ->get();


        $total_produts = 0;
        $total_price = 0;

        foreach($carts as $cart){

            $total_produts += $cart->total;
            $total_price += $cart->product->product_price * $cart->total;
        }

        return view('checkout')->with(['total_products' => $total_produts,'total_price' => $total_price,"carts" => $carts ,"checkout_price" => $total_price]);
    }
}
