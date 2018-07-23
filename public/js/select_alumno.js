$(document).ready(function () {

	//Obetner por ajax los alumnos asociados a un determinado tutor
    $.get('/asistencias/alumnoSelect', function (response, state) {

      for (i = 0; i < response.length; i++) {

        $("#seleccionAlumno").append("<option value='" + response[i].dni + "'>" + response[i].nombre + ", " + response[i].apellido + "</option>");

      }

      $("#seleccionAlumno").prepend("<option value=\"10000000000\"selected>Seleccione ...</option>")
    });


    


});
//end document.ready