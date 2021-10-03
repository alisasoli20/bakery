<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(){
        $products = product::all();
        $carts =  Cart::select('product_id', DB::raw('count(*) as total'))
            ->groupBy('product_id')
            ->get();

        return view('index')->with(['products' => $products, 'carts' => $carts]);
    }
}
