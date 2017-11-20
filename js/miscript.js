$(document).ready(function() {
        $.ajax({
                var parametros = "hola";
                data:  parametros,
                url:   'busquedagrl.php',
                type:  'post',
                beforeSend: function () {
                        $("#lista").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#lista").html(response);
                }
        });
});