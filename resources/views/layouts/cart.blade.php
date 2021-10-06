<div class="sidebar-menu-wrapper">
    <div class="cart_sidebar">
        <button type="button" class="close_btn"><i class="fal fa-times"></i></button>
        <h2 class="heading_title text-uppercase">Cart Items - <span id="total_carts">{{ $total_products }}</span></h2>

        <div class="cart_items_list" id="cart-div">
            @if($carts)
                @foreach($carts as $cart)

                    <div class="cart_item">
                        <div class="item_image">
                            <img src="{{ asset("images/".$cart->product->product_image) }}" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <h4 class="item_title">
                                {{ $cart->product->product_name  }}
                            </h4>
                            <span class="item_price">Rs.{{ $cart->product->product_price * $cart->total }}</span>
                            <span class="item_price">Qty:{{ $cart->total }}</span>
                            <button type="button" class="remove_btn" onclick="removeCart({{ $cart->product_id }})"><i class="fal fa-times"></i></button>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="total_price text-uppercase">
            <span>Sub Total:</span>
            <span id="total_price">Rs.{{ $total_price }}</span>
        </div>
        <ul class="btns_group ul_li">
            <li><a href="cart" class="btn btn_primary text-uppercase">View Cart</a></li>
            <li><a href="checkout" class="btn btn_border border_black text-uppercase">Checkout</a></li>
        </ul>
    </div>
    <div class="cart_sidebar_overlay"></div>
</div>
