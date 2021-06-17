function viewArticles() {
    var parametros = '&controlador=Article&metodo=listArticles';
    $.ajax({
        url: 'C_Ajax.php',
        type: 'post',
        data: parametros,
        success: function(vista) {
            $('.content').html(vista);
        }
    })
}


function newArticle() {
    var parametros = '&controlador=Article&metodo=newArticle';
    $.ajax({
        url: 'C_Ajax.php',
        type: 'post',
        data: parametros,
        success: function(vista) {
            $('.content').html(vista);
        }
    })
}

function saveArticle() {
    var result = checkFormNew();
    if (result != '') {
        $('#mensaje').html(result);
    } else {
        $formData = new FormData($('#formNew')[0]);
        $image = $formData.get('image')['name'];
        var parametros = '&controlador=Article&metodo=saveArticle';
        parametros += '&img=' + $image;
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

function deleteArt(id_article) {
    var parametros = '&controlador=Article&metodo=deleteArticle';
    parametros += '&id_article=' + id_article;
    $.ajax({
        url: 'C_Ajax.php',
        type: 'post',
        data: parametros,
        success: function(vista) {
            $('.content').html(vista);
        }
    })
}

function changeState(id_article) {
    var parametros = '&controlador=Article&metodo=changeState';
    parametros += '&id_article=' + id_article;
    $.ajax({
        url: 'C_Ajax.php',
        type: 'post',
        data: parametros,
        success: function() {
            viewArticles();
        }
    })
}

function modifyArt(id_article) {
    var parametros = '&controlador=Article&metodo=newArticle';
    parametros += '&id_article=' + id_article;
    $.ajax({
        url: 'C_Ajax.php',
        type: 'post',
        data: parametros,
        success: function(vista) {
            $('.content').html(vista);
        }
    })
}