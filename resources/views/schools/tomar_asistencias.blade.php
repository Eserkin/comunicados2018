@extends('layouts.general')
@section('title','Comunicados- Asistencias')
@section ('styles')
@endsection
@section ('sidebar')
@if(Auth::user()->tipo=="personal")
@include('schools.school_sidebar')
@elseif(Auth::user()->tipo=="tutor")
@include('parents.parents_sidebar')
@elseif(Auth::user()->tipo=="alumno")
@include('students.student_sidebar')
@endif
@endsection
@section ('content')
<div class="content">
  <div class="page-heading">
    <h1>Tomar Asistencias.</h1>
  </div>
  <hr>
  <form class="form-horizontal" role="form" action="asistencias" method="POST" id"form2">
    <div class="row">
      <div class="col-md-4">

        @include('schools.select_escuela')

        <div class="form-group">
          <label class="control-label">Fecha:</label>
          <div>
            <input type="text" id="fecha" name="fecha" class="form-control datepicker-input" data-mask="99-99-9999" placeholder="mm-dd-yyyy" required>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="widget">
          <div class="widget-content">
            <div class="table-responsive">
              <table data-sortable="" class="table table-hover table-striped">
                <thead>
                  <tr>
                    <th data-sorted="false">Nombre completo</th>
                    <th  data-sortable="false" data-sorted="false" style="text-align:center">¿Asistió a clases?</th>
                  </tr>
                </thead>
                <tbody id="tablaAlumnos">

                </tbody>
              </table>
            </div>
          </div>
        </div>
        <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-lg btn-success" id="btnEnviar"><i class="icon-paper-plane-1"></i> Cargar asistencias</button>
  </form>
  </div>
  </div>
</div>

@include('layouts.footer')

@endsection

@section ('javascript')
<!-- Page Specific JS Libraries -->
<script type="text/javascript" src="{{ URL::asset('js/common.js') }}"></script>
<script type="text/javascript">
  
    $("#seleccionCurso").on('change', function (e) {
    var curso_id = e.target.value;

    //Se carga la tabla alumnos con los alumnos del curso seeccionado
    $.get('/asistencias/curso/' + curso_id + "", function (response, state) {
      $("#tablaAlumnos").empty();
      for (i = 0; i < response.length; i++) {
        $("#tablaAlumnos").append("<tr><td><strong>" + response[i].apellido + "," + response[i].nombre + "</strong></td><td><div aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative; text-align:center;\"><input type=\"checkbox\" class=\"rows-check\" name=\"asistio[" + i + "]\" value=\"" + response[i].dni + "\" style=\"\"><ins class=\"iCheck-helper\" style=\"\"></ins></div></td></tr>");
      }
    });

    //En caso de seleccionar la opcion Seleccion se borra la tabla de alumnos
    if (curso_id = "10000000000") {
      $("#tablaAlumnos").empty();
    }

  });
</script>

@endsection