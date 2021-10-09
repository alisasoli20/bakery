<script>
    $(document).ready(function () {
        cartload();
    });

    function addToCart(product_id, quantity){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });


                $.ajax({
                    url: "{{ route('add.to.cart') }}",
                    method: "POST",
                    data: {
                        'quantity': quantity,
                        'product_id': product_id,
                    },
                    success: function (response) {
                        window.location.reload();
                    },
                });

    }
    function cartload()
    {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '{{ route("load.cart.data") }}',
            method: "GET",
            success: function (response) {
                $('.basket-item-count').html('');
                var parsed = jQuery.parseJSON(response)
                console.log(parsed.totalcart)
                $("#total_carts").html(parsed.totalcart)
                $("#total_badge").html(parsed.totalcart)
            }
        });
    }

    function removeCart(product_id){

        var data = {
            '_token': $('meta[name="csrf-token"]').attr('content'),
            "product_id": product_id,
        };

        $.ajax({
            url: '{{ route("remove.from.cart") }}',
            type: 'DELETE',
            data: data,
            success: function (response) {
                window.location.reload();
            }
        });
    }
</script>

