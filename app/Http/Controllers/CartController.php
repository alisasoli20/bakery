<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function addToCart(Request $request){
        $data = [
            'product_id' => $request->product_id
        ];

        $cart = new Cart($data);

        if($cart->save()){
            $carts =  Cart::select('product_id', DB::raw('count(*) as total'))
                ->groupBy('product_id')
                ->get();

            $response = '';
            $total_produts = 0;
            $total_price = 0;

            foreach($carts as $cart){
                $response .= '   <div class="cart_item"> '.
                    '<div class="item_image"> '.
                    '<img src="'.'images/'.$cart->product->product_image.'" alt="image_not_found"> '.
                    '</div> '.
                    '<div class="item_content"> '.
                    ' <h4 class="item_title">'.
                    $cart->product->product_name.
                    '</h4>'.
                    ' <span class="item_price">Rs.'.$cart->product->product_price * $cart->total.'</span>'.
                    ' <span class="item_price">Qty:'.$cart->total.'</span>'.
                    '  <button type="button" class="remove_btn" onclick="removeCart('.$cart->product_id.')"><i class="fal fa-times"></i></button>'.
                    '</div>'.
                    '</div>';
                $total_produts += $cart->total;
                $total_price += $cart->product->product_price * $cart->total;
            }
            return response()->json(['carts' => $response,'total_products' => $total_produts,'total_price' => $total_price ,'message' => 'Added to cart successfully']);
        }


        return response()->json(['message' => 'Failed!']);
    }

    public function removeFromCart(Request $request){
        $data = [
            'product_id' => $request->product_id
        ];

        if(Cart::where('product_id',$request->product_id)->delete()){
            $carts =  Cart::select('product_id', DB::raw('count(*) as total'))
                ->groupBy('product_id')
                ->get();

            $response = '';
            $total_produts = 0;
            $total_price = 0;

            foreach($carts as $cart){
                $response .= '   <div class="cart_item"> '.
                    '<div class="item_image"> '.
                    '<img src="'.'images/'.$cart->product->product_image.'" alt="image_not_found"> '.
                    '</div> '.
                    '<div class="item_content"> '.
                    ' <h4 class="item_title">'.
                    $cart->product->product_name.
                    '</h4>'.
                    ' <span class="item_price">Rs.'.$cart->product->product_price * $cart->total.'</span>'.
                    ' <span class="item_price">Qty:'.$cart->total.'</span>'.
                    '  <button type="button" class="remove_btn" onclick="removeCart('.$cart->product_id.')"><i class="fal fa-times"></i></button>'.
                    '</div>'.
                    '</div>';
                $total_produts += $cart->total;
                $total_price += $cart->product->product_price * $cart->total;
            }
            return response()->json(['carts' => $response,'total_products' => $total_produts,'total_price' => $total_price ,'message' => 'Remove from cart successfully']);
        }


        return response()->json(['error'=> true, 'message' => 'Failed!']);
    }
}
