function saveInfo() {

    var parametros = '&controlador=Information&metodo=saveInformation';
    parametros += '&' + $('#formNew').serialize();
    // console.log(parametros);
    $.ajax({
        url: 'C_Ajax.php',
        type: 'post',
        data: parametros,
        dataType: 'json',
        success: function(messageResp) {
            console.log(messageResp)
            $('.message').html(messageResp.message);
            if (messageResp.success == 'Y') {
                $('.message').addClass('success');
            } else {
                $('.message').addClass('inputRed');
            }
        }
    })
}