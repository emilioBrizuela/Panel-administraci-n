function login() {
    if (this.checkform()) {
        var parametros = '&controlador=User&metodo=loginUser';
        parametros += '&' + $('#formLogin').serialize();
        $.ajax({
            url: 'C_Ajax.php',
            type: 'post',
            data: parametros,
            success: function() {
                window.location.href = 'index.php';
            }
        })
    }
}

function saveUser() {
    var parametros = '&controlador=User&metodo=saveUser';
    parametros += '&' + $('#formNew').serialize();
    console.log(parametros)
    $.ajax({
        url: 'C_Ajax.php',
        type: 'post',
        data: parametros,
        dataType: 'json',
        success: function(messageResp) {
            // console.log(messageResp)
            $('.message').html(messageResp.message);
            if (messageResp.success == 'Y') {
                $('.message').addClass('success');
            } else {
                $('.message').addClass('inputRed');
            }
        }
    })


}

function checkform() {
    if (($('#user').val() == '') || ($('#password').val() == '')) {
        $('#message').html("There are empty fields, check the form");
        $('#message').addClass("inputRed");
        return false;
    }
    return true;
}