<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(){
        $products = product::all();

        $data = $this->getCartData();

        //dd($cart_data);
        return view('index')->with(['products' => $products, 'carts' => $data]);
    }

    public function aboutUs(){
        $data = $this->getCartData();
        return view('about')->with([ 'carts' => $data]);
    }

    public function aboutUs2(){
        $data = $this->getCartData();
        return view('about_2')->with(['carts' => $data]);

    }
    public function menu(){
        $data = $this->getCartData();
        return view('menu')->with([ 'carts' => $data]);

    }
    public function shop_details(){
        $data = $this->getCartData();
        return view('shop_details')->with(['carts' => $data]);

    }
    public function contact(){
        $data = $this->getCartData();
        return view('contact')->with(['carts' => $data]);

    }
    public function cart(){
        $data = $this->getCartData();
        return view('cart')->with(['carts' => $data]);

    }
    private function getCartData(){
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);
        return $cart_data;
    }

}
