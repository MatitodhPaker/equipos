$(document).ready(function() {
    $('#btnRegisraequipo').click(function() {
        $(location).attr('href', 'ingresarequipo.php');
    });
});
function eliminarequipo(idequipo) {
    swal({
            title: "Seguro de eliminar!!!",
            text: "Una vez eliminado no podras recuperar este equipo",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
							$.ajax({
								type: "POST",
								data: "idequipo=" + idequipo,
								url: "procesos/Eliminarequipo.php",
								success: function(respuesta) {
										respuesta = respuesta.trim();
										if (respuesta == 1) {
												swal(":D", "Se elimino con exito", "success");
												location.reload();
										} else {
												swal(":(", "No se pudo agregar", "error");
										}
								}
								});
            }
        });
}
function datosUsuario() {
	$.ajax({
	type: "POST",
	data: {
			'nombre': $('#nombre').val(),
			'apaterno': $('#apaterno').val(),
			'telefono': $('#telefono').val(),
			'email': $('#email').val()
	},
	url: "procesos/agregarusuarios.php",
	success: function(respuesta) {
			respuesta = respuesta.trim();
			if (respuesta == 1) {
					$('#frmUsuario')[0].reset();
					swal(":D", "Se agrego con exito", "success");
			} else {
					swal(":(", "No se pudo agregar", "error");
			}
	}
	});
	return false;
}

function datosEquipo() {
	$.ajax({
			type: "POST",
			data: {
					'idusuario':$('#idUsuario').val(),
					'nombre': $('#nombreusuario').val(),
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
function datosUsuarioU() {
	$.ajax({
	type: "POST",
	data: {
			'idusuariou':$('#idUsuariou').val(),
			'nombre': $('#nombre').val(),
			'apaterno': $('#apaterno').val(),
			'telefono': $('#telefono').val(),
			'email': $('#email').val()
	},
	url: "procesos/agregarusuarios.php",
	success: function(respuesta) {
			respuesta = respuesta.trim();
			if (respuesta == 1) {
					$('#frmUsuario')[0].reset();
					swal(":D", "Se agrego con exito", "success");
			} else {
					swal(":(", "No se pudo agregar", "error");
			}
	}
	});
	return false;
}
function actualizarU(idusuario) {
	$('#idUsuariou').val(idusuario);
	$('#idUsuarioequipo').val(idusuario);
}
function datosEquipoU() {
	$.ajax({
			type: "POST",
			data: {
					'idusuario':$('#idUsuarioequipo').val(),
					'nombre': $('#nombreEquipoU').val(),
					'modelo': $('#modeloU').val(),
					'numeroserie': $('#numeroserieU').val(),
					'imagen': $('#imagenU').val()
			},
			url: "procesos/agregarequiposU.php",
			success: function(respuesta) {
				console.log(respuesta);
					respuesta = respuesta.trim();
					if (respuesta == 1) {
							$('#frmEquipoU')[0].reset();
							swal(":D", "Se agrego con exito", "success");
					} else {
							swal(":(", "No se pudo agregar", "error");
							return false;
					}
			}
	});
}
function eliminarusuario(idusuario) {
	swal({
					title: "Seguro de eliminar!!!",
					text: "Una vez eliminado no podras recuperar este equipo",
					icon: "warning",
					buttons: true,
					dangerMode: true,
			})
			.then((willDelete) => {
					if (willDelete) {
						$.ajax({
							type: "POST",
							data: "idusuario=" + idusuario,
							url: "procesos/EliminarUsuario.php",
							success: function(respuesta) {
									respuesta = respuesta.trim();
									if (respuesta == 1) {
											swal(":D", "Se elimino con exito", "success");
											location.reload();
									} else {
											swal(":(", "No se pudo agregar", "error");
									}
							}
							});
					}
			});
}