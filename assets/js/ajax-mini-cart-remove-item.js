// Ajax delete product in the cart
$(document).on('click', '.mini_cart_item a.del-icone', function (e)
{
    e.preventDefault();

    var product_id = $(this).attr("data-product_id"),
        cart_item_key = $(this).attr("data-cart_item_key"),
        product_container = $(this).parents('.mini_cart_item');


    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: wc_add_to_cart_params.ajax_url,
        data: {
            action: "product_remove",
            product_id: product_id,
            cart_item_key: cart_item_key
        },
        success: function(response) {
            if ( ! response || response.error )
                return;

            var fragments = response.fragments;

            // Replace fragments
            if ( fragments ) {
                $.each( fragments, function( key, value ) {
                    $( key ).replaceWith( value );
                });
            }
        }
    });
});