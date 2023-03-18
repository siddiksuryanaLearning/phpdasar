$(document).ready(function(){
    $('#keyword').on('keyup', function(){
        $('#container').load('jquery/product.php?keyword=' + $('#keyword').val());
    })
})