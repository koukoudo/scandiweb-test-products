jQuery(function() {
    function removeProduct(item) {
        $(item).parent().remove();
    }

    $('#btn_delete').on('click',function() {
        console.log("YES");
        let products = [];
        $('.check_product').each(function () {
            if ($(this).is(':checked') == true) {
                products.push($(this).attr('id'));
            }
        });

        $.post('delete', {products: JSON.stringify(products)}, function() {
            products.forEach(removeProduct);
            location.reload();
        });
    });
});