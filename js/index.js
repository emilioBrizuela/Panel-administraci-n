function getView(controller, metodo) {
    var parametros = '&controlador=' + controller + '&metodo=' + metodo;
    // console.log(parametros)
    $.ajax({
        url: 'C_Ajax.php',
        type: 'post',
        data: parametros,
        success: function(vista) {
            $('.content').html(vista);
        }
    })
}