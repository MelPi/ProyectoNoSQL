function busquedaid(){
        var parametros = {
                "valor" : $("#user").val()
        };
        $.ajax({
                data:  parametros,
                url:   'busquedaid.php',
                type:  'post',
                beforeSend: function () {
                        $("#contenidoporid").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#contenidoporid").html(response);
                }
        });
}
function busquedafecha(){
        var parametros = {
                "valor" : $("#fecha").val()
        };
        $.ajax({
                data:  parametros,
                url:   'busquedafecha.php',
                type:  'post',
                beforeSend: function () {
                        $("#contenidoporfecha").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#contenidoporfecha").html(response);
                }
        });
}