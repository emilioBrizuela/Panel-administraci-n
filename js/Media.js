function saveImage() {
    $formData = new FormData($('#formNew')[0]);
    $image = $formData.get('image')['name'];
    $descImg = $formData.get('descImg');
    var parametros = '&controlador=Media&metodo=saveImage';
    parametros += '&img=' + $image + '&description=' + $descImg;
    $.ajax({
        url: 'C_Ajax.php',
        type: 'post',
        data: parametros,
        dataType: 'json',
        success: function(respuesta) {
            $('.message').html(respuesta.message);
            if (respuesta.success == 'Y') {
                $('.message').addClass('success');
            } else {
                $('.message').addClass('error');
            }
        }
    })
}