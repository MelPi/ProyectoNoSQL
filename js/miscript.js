$(document).ready(function() {
        $.ajax({
                data:  parametros,
                url:   '../php/busquedagrl.php',
                type:  'post',
                beforeSend: function () {
                        $("#lista").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#lista").html(response);
                }
        });
});
