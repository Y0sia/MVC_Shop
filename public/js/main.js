$('#currency').change(function(){
    window.location = 'currency/change?curr=' + $(this).val();
});

$('.available select').on('change', function(){
    var modId = $(this).val(),
        color = $(this).find('option').filter(':selected').data('title'),
        price = $(this).find('option').filter(':selected').data('price'),
        old_price = $('.item_old_price').data('base'),
        basePrice = $('#base-price').data('base');
    if(price){
        $('#base-price').text(symboleLeft + price + symboleRight);
        $('.item_old_price').text('');
    }else{
        $('#base-price').text(symboleLeft + basePrice + symboleRight);
        $('.item_old_price').text(symboleLeft + old_price + symboleRight)
    }

});