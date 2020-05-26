$(document).ready(function(){

    $("#palabraPalindroma").submit(function( event ){

        event.preventDefault(); //evita que el formulario realice la validacion sin tener en cuenta el Js.

        var url ="palindromas.php";

        if($("#palabra").val().length == 0)
        {
            alert("todos los campos son obligatorios.");
        }
        else
        {
            //document.frmPersona.submit(); //Realizar el envío a la página PHP.

            //Ahora con AJAX:

            var url ="palindroma.php";

            $.ajax(
                {
                    type: "POST",
                    url: url,
                    data: $("#palabraPalindroma").serialize(), //incluye la informacion del formulacion y los envia a php:
                    success: function (data)
                    {
                        $('#resultados').html(data);
                    }
                }
            )
        }
    });
});