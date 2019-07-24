$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

    $('.add-to-cart').click( function() {
        const id = $(this).data('id');
        const quantity = $(this).prev().val();
        $(this).prev().val('');

        $.ajax({
            url: '/cart',
            method: 'post',
            data: {
                id: id,
                quantity: quantity 
            },
            success: function(data) {
                alert(data);
            }
        });
    });

    // $('.add-to-cart').click( function() {
    // 	const id = $(this).data('id');
    // 	const quantity = $(this).prev().val();
    // 	$(this).prev().val('');
    // 	$.ajax({
    // 		url : 'controllers/add_to_cart.php?id='+id,
    // 		method : 'post',
    // 		data : {quantity : quantity},
    // 		success : data => {
    // 			$('#cart-count').html(data);

    // 			alert('added to cart');
    // 		}
    // 	});
    // });
});