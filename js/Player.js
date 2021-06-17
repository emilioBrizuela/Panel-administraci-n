function viewPlayer() {
    var parametros = '&controlador=Player&metodo=listPlayer';
    $.ajax({
        url: 'C_Ajax.php',
        type: 'post',
        data: parametros,
        success: function(vista) {
            $('.content').html(vista);
        }
    })
}

function newPlayer() {
    var parametros = '&controlador=Player&metodo=newPlayer';
    $.ajax({
        url: 'C_Ajax.php',
        type: 'post',
        data: parametros,
        success: function(vista) {
            $('.content').html(vista);
        }
    })
}

function newTeam() {
    var parametros = '&controlador=Player&metodo=newTeam';
    $.ajax({
        url: 'C_Ajax.php',
        type: 'post',
        data: parametros,
        success: function(vista) {
            $('.content').html(vista);
        }
    })
}

function savePlayer() {
    var result = checkFormNew();
    if (result != '') {
        $('#mensaje').html(result);
    } else {
        $formData = new FormData($('#formNew')[0]);
        $image = $formData.get('image')['name'];
        var parametros = '&controlador=Player&metodo=savePlayer';
        parametros += '&img=' + $image;
        parametros += '&' + $('#formNew').serialize();
        $.ajax({
            url: 'C_Ajax.php',
            type: 'post',
            data: parametros,
            dataType: 'json',
            success: function(messageResp) {
                $('.message').html(messageResp.message);
                if (messageResp.success == 'Y') {
                    $('.message').addClass('success');
                } else {
                    $('.message').addClass('inputRed');
                }
            }
        })
    }
}

function saveTeam() {
    var result = checkFormNew();
    if (result != '') {
        $('#mensaje').html(result);
    } else {
        var parametros = '&controlador=Player&metodo=saveTeam';
        parametros += '&' + $('#formNew').serialize();
        $.ajax({
            url: 'C_Ajax.php',
            type: 'post',
            data: parametros,
            dataType: 'json',
            success: function(messageResp) {
                console.log(messageResp);
                $('.message').html(messageResp.message);
                if (messageResp.success == 'Y') {
                    $('.message').addClass('success');
                } else {
                    $('.message').addClass('inputRed');
                }
            }
        })
    }
}

function checkFormNew() {
    var result = '';
    $('.inputRed').removeClass('inputRed');

    if ($('#title').val() == '') {
        $('#title').addClass('inputRed');
    };
    if ($('.inputRed').length > 0) {
        result = 'Check the fields in red.';
    }
    return result;
}

function deletePlayer(id_player) {
    var parametros = '&controlador=Player&metodo=deletePlayer';
    parametros += '&id_player=' + id_player;
    $.ajax({
        url: 'C_Ajax.php',
        type: 'post',
        data: parametros,
        success: function(vista) {
            $('.content').html(vista);
        }
    })
}