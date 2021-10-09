<div class="sidebar-menu-wrapper">
    <div class="cart_sidebar">
        <button type="button" class="close_btn"><i class="fal fa-times"></i></button>
        <h2 class="heading_title text-uppercase">Cart Items - <span id="total_carts"></span></h2>

        <div class="cart_items_list" id="cart-div">
            @if(isset($carts))
                @if(Cookie::get('shopping_cart'))
                    @php $total_price ="0" @endphp
                    @foreach ($carts as $data)
                        <div class="cart_item">
                            <div class="item_image">
                                <img src="{{"images/".$data['item_image'] }}" alt="image_not_found">
                            </div>
                            <div class="item_content">
                                <h4 class="item_title">
                                    {{ $data['item_name']  }}
                                </h4>
                                <span class="item_price">Rs.{{ $data['item_price'] }}</span>
                                <span class="item_price">Qty:{{ $data['item_quantity'] }}</span>
                                <button type="button" class="remove_btn" onclick="removeCart({{ $data['item_id'] }})"><i class="fal fa-times"></i></button>
                            </div>
                        </div>
                    @endforeach
                @endif
            @endif
        </div>
        <div class="total_price text-uppercase">
            <span>Sub Total:</span>
            <span id="total_price"></span>
        </div>
        <ul class="btns_group ul_li">
            <li><a href="cart" class="btn btn_primary text-uppercase">View Cart</a></li>
            <li><a href="checkout" class="btn btn_border border_black text-uppercase">Checkout</a></li>
        </ul>
    </div>
    <div class="cart_sidebar_overlay"></div>
</div>
