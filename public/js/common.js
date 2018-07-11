$(document).ready(function () {

  //Obetner por ajax los cursos en base a la escuela seleccionada
  $("#seleccionEscuela").on('change', function (e) {
    var escuela_id = e.target.value;

    $.get('/asistencias/escuela/' + escuela_id + "", function (response, state) {
      $("#seleccionCurso").empty();

      for (i = 0; i < response.length; i++) {

        $("#seleccionCurso").append("<option value='" + response[i].id + "'>" + response[i].grado + " grado, Turno " + response[i].turno + " - Aula: " + response[i].aula + "</option>");

      }

      $("#seleccionCurso").prepend("<option value=\"10000000000\"selected>Seleccione ...</option>")
    });

  });


  //Obetner por ajax las materias en base a el curso seleccionado
  $("#seleccionCurso").on('change', function (e) {
    var curso_id = e.target.value;

    $.get('/asistencias/materia/' + curso_id + "", function (response, state) {
      $("#seleccionMateria").empty();

      for (i = 0; i < response.length; i++) {
        $("#seleccionMateria").append("<option value='" + response[i].id + "'>" + response[i].titulo + "- , Cursada: " + response[i].dia_cursada + " " + response[i].hora_cursada + "</option>")
      };

    });

    $("#seleccionMateria").prepend("<option value=\"\" selected>Seleccione ...</option>")

  });

});
//end document.ready