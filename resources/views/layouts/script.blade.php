<script>

    function addToCart(product_id){

        var form = {
            product_id: product_id
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url  : '{{ route("add.to.cart") }}',
            data : form,
            dataType: 'JSON',
            success: function(response) {

                $("#cart-div").html(response.carts)
                $("#total_carts").html(response.total_products)
                $("#total_price").html('Rs.'+response.total_price)
                $("#total_badge").html(response.total_products)
            }
        });
    }

    function removeCart(product_id){

        var form = {
            product_id: product_id
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url  : '{{ route("remove.from.cart") }}',
            data : form,
            dataType: 'JSON',
            success: function(response) {
                if(response.error){
                    alert("Error")
                    return;
                }
                $("#cart-div").html(response.carts)
                $("#total_carts").html(response.total_products)
                $("#total_price").html('Rs.'+response.total_price)
                $("#total_badge").html(response.total_products)
            }
        });
    }
</script>
