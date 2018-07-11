@extends('layouts.general')
@section('title','Comunicados- Acceso Admin')
@section ('styles')
@endsection
@section ('sidebar')
@if(Auth::user()->tipo=="personal")
@include('schools.school_sidebar')
@elseif(Auth::user()->tipo=="tutor")
@include('parents.parents_sidebar')
@elseif(Auth::user()->tipo=="alumno")
@include('students.student_sidebar')
@elseif(Auth::user()->tipo=="admin")
@include('admins.admin_sidebar')
@endif
@endsection
@section ('content')
<!-- Page Heading Start -->
<div class="page-heading">
  <h1><i class='fa fa-pencil'> </i>&nbsp;&nbsp;Subir calificación</h1>
</div>
<!-- Page Heading End-->
<div id="basic-form">

  <!-- Comienzo de formulario-->
  
  <form role="form" action="subir" method="POST">

    <div class="col-md-6">
      @include('schools.select_escuela')
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label class="control-label">Evaluación:</label>
        <select id="seleccionEvaluacion" name="seleccionEvaluacion" class="form-control">
        </select>
      </div>
      <div class="form-group ">
        <label class="control-label">Alumno:</label>
        <select id="seleccionAlumno" name="seleccionAlumno" class="form-control">
        </select>
      </div>

      <div class="form-group ">
        <label for="calificacion" class="control-label">Calificación:</label>
        <div>
          <input type="text" class="form-control" id="calificacion" name="calificacion" placeholder="1 al 10">
        </div>
      </div>
    </div>

    <hr>

{{--
    <div class="form-group">
      <a class="file-input-wrapper btn btn btn-default">Subir evaluación<input type="file" class="btn btn-default" title="" style="left: -152px; top: 8px;"></a>
      <p class="help-block">La imagen debe estar en formato .jpg o .png.</p>
    </div> 
--}}
    <div class="col-md-12">
      <div class="form-group">
        <label class="control-label">Notificar</label>
        <div >
          <div class="checkbox">
            <label class="">
              <div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false"><input type="checkbox" name="enviar_alumnos" value="alumnos"><ins class="iCheck-helper"></ins></div>
              Enviar calificación al alumno.
            </label>
          </div>
        </div>
        <div >
          <div class="checkbox">
            <label class="">
              <div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false"><input type="checkbox" name="enviar_tutores" value="tutores"><ins class="iCheck-helper"></ins></div>
              Incluir también a los padres/ tutores.
            </label>
          </div>
        </div>
      </div>
      <br><br>
      <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
      <button type="submit" class="btn btn-danger">Crear evaluación</button>
    </div>

  </form>
{{--   Fin de formulario --}}

</div>

@include('layouts.footer')
@endsection

@section ('javascript')
<script type="text/javascript" src="{{ URL::asset('js/select_escuela.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function () {

   //Obetner por ajax los Evaluaciones en base a el curso seleccionado seleccionada
    $("#seleccionMateria").on('change', function (e) {
      var materia_id = e.target.value;

      $.get('/subirCalificacion/evaluacion/' + materia_id + "", function (response, state) {
        $("#seleccionEvaluacion").empty();

        for (i = 0; i < response.length; i++) {

          $("#seleccionEvaluacion").append("<option value='" + response[i].id + "'>" + response[i].temas + " - " + response[i].periodo + " - Fecha: " + response[i].fecha + "</option>");

        }

        $("#seleccionEvaluacion").prepend("<option value=\"\"selected>Seleccione ...</option>")
      });

    });

    //Obetner por ajax los que dieron una determinada evaluación y a los que no se les subió la nota
    $("#seleccionEvaluacion").on('change', function (e) {
      var curso_id = e.target.value;

      $.get('/subirCalificacion/alumnos/' + curso_id + "", function (response, state) {
        $("#seleccionAlumno").empty();

        for (i = 0; i < response.length; i++) {

          $("#seleccionAlumno").append("<option value='" + response[i].dni + "'>" + response[i].apellido + ", " + response[i].nombre + " - DNI: " + response[i].dni + "</option>");

        }

        $("#seleccionAlumno").prepend("<option value=\"\"selected>Seleccione ...</option>")
      });

    });

  });
  //end document.ready
</script>

@endsection