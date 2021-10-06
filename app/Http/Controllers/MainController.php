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

        $data = $this->getCartData();

        return view('index')->with(['products' => $products,'total_products' => $data["total_products"],'total_price' => $data["total_price"], 'carts' => $data["carts"]]);
    }

    public function aboutUs(){
        $data = $this->getCartData();
        return view('about')->with(['total_products' => $data["total_products"],'total_price' => $data["total_price"], 'carts' => $data["carts"]]);
    }

    public function aboutUs2(){
        $data = $this->getCartData();
        return view('about_2')->with(['total_products' => $data["total_products"],'total_price' => $data["total_price"], 'carts' => $data["carts"]]);

    }
    public function menu(){
        $data = $this->getCartData();
        return view('menu')->with(['total_products' => $data["total_products"],'total_price' => $data["total_price"], 'carts' => $data["carts"]]);

    }
    public function shop_details(){
        $data = $this->getCartData();
        return view('shop_details')->with(['total_products' => $data["total_products"],'total_price' => $data["total_price"], 'carts' => $data["carts"]]);

    }
    public function contact(){
        $data = $this->getCartData();
        return view('contact')->with(['total_products' => $data["total_products"],'total_price' => $data["total_price"], 'carts' => $data["carts"]]);

    }
    public function cart(){
        $data = $this->getCartData();
        return view('cart')->with(['total_products' => $data["total_products"],'total_price' => $data["total_price"], 'carts' => $data["carts"]]);

    }
    private function getCartData(){
        $carts =  Cart::select('product_id', DB::raw('count(*) as total'))
            ->groupBy('product_id')
            ->get();


        $total_produts = 0;
        $total_price = 0;

        foreach($carts as $cart){

            $total_produts += $cart->total;
            $total_price += $cart->product->product_price * $cart->total;
        }

        return array(
            "carts" => $carts,
            "total_products" => $total_produts,
            "total_price" => $total_price
        );
    }

}
