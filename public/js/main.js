$(document).ready(function() {
    $('#btneliminar').click(function() {
        eliminarequipo();
    });

    $('#btnRegisraequipo').click(function() {
        $(location).attr('href', 'ingresarequipo.php');
    });
    $("#btn_ayuda").click(() => {
        datosEquipo();
    })
});

function eliminarequipo() {
    swal({
            title: "Seguro de eliminar!!!",
            text: "Una vez eliminado no podras recuperar este equipo",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                swal("se elimino de manera correcta", {
                    icon: "success",
                });
            }
        });
}

function datosUsuario() {
    swal(":D", "verdad que te engañe", "error");
    return false;
}

function datosEquipo() {
    $.ajax({
        type: "POST",
        data: {
            'nombre': $('#nombre').val(),
            'modelo': $('#modelo').val(),
            'numeroserie': $('#numeroserie').val(),
            'imagen': $('#imagen').val()
        },
        url: "procesos/agregarequipos.php",
        success: function(respuesta) {
            respuesta = respuesta.trim();
            if (respuesta == 1) {
                $('#frmEquipos')[0].reset();
                swal(":D", "Se agrego con exito", "success");
            } else {
                swal(":(", "No se pudo agregar", "error");
            }
        }
    });
    return false;
}