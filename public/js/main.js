$(document).ready(function () {
  $('#btneliminar').click(function () {
    eliminarequipo();
  });
  
  $('#btnRegisraequipo').click(function () {
    $(location).attr('href','ingresarequipo.php');
  });
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
function calcular() {
  swal(":D","verdad que te engañe","error");
  return false;
}
