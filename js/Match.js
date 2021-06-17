function viewMatches() {
    var parametros = '&controlador=Match&metodo=listMatch';
    $.ajax({
        url: 'C_Ajax.php',
        type: 'post',
        data: parametros,
        success: function(vista) {
            $('.content').html(vista);
        }
    })
}

function newMatch() {
    var parametros = '&controlador=Match&metodo=newMatch';
    $.ajax({
        url: 'C_Ajax.php',
        type: 'post',
        data: parametros,
        success: function(vista) {
            $('.content').html(vista);
        }
    })
}

function saveMatch() {
    var result = checkFormNew();
    if (result != '') {
        $('#mensaje').html(result);
    } else {
        $formData = new FormData($('#formNew')[0]);
        $image = $formData.get('image')['name'];
        var parametros = '&controlador=Match&metodo=saveMatch';
        parametros += '&' + $('#formNew').serialize();
        parametros += '&img=' + $image;
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

function modifyMatch(id_match) {
    var parametros = '&controlador=Match&metodo=newMatch';
    parametros += '&id_match=' + id_match;
    $.ajax({
        url: 'C_Ajax.php',
        type: 'post',
        data: parametros,
        success: function(vista) {
            $('.content').html(vista);
        }
    })
}

function deleteMatch(id_match) {
    var parametros = '&controlador=Match&metodo=deleteMatch';
    parametros += '&id_match=' + id_match;
    console.log(parametros)
    $.ajax({
        url: 'C_Ajax.php',
        type: 'post',
        data: parametros,
        success: function(vista) {
            $('.content').html(vista);
        }
    })
}