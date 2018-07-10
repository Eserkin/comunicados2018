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
        <div class="form-group">
          <label class="control-label">Escuela:</label>
          <select id="seleccionEscuela" name="seleccionEscuela" class="form-control " required>
            <option>Seleccione ...</option>
            @foreach($escuelas as $escuela)
            <option value="{{$escuela->id}}">Escuela nº {{$escuela->numero}}- {{$escuela->nombre}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label class="control-label">Curso:</label>
          <select id="seleccionCurso" name="seleccionCurso" class="form-control " required>
            
          </select>
        </div>
        <div class="form-group">
          <label class="control-label">Materia:</label>
          <select id="seleccionMateria" name="seleccionMateria" class="form-control " required>
            
          </select>
        </div>
        <div class="form-group">
          <label class="control-label">Fecha:</label>
          <div>
            <input type="text" id="fecha" name="fecha" class="form-control datepicker-input" data-mask="9999-99-99" placeholder="yyyy-mm-dd" required>
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
<script type="text/javascript">

//Obetner por ajax los cursos en base a la escuela seleccionada
  $("#seleccionEscuela").on('change',function(e){
    var escuela_id=e.target.value;

    $.get('/asistencias/escuela/'+escuela_id+"", function(response,state){
        $("#seleccionCurso").empty();

        for(i=0;i<response.length;i++){

          $("#seleccionCurso").append("<option value='"+response[i].id+"'>"+response[i].grado+" grado, Turno "+response[i].turno+" - Aula: "+response[i].aula+"</option>");
          
        }

        $("#seleccionCurso").prepend("<option value=\"10000000000\"selected>Seleccione ...</option>")
    });

  });


//Obetner por ajax los alumnos en base a los cursos seleccionados
  $("#seleccionCurso").on('change',function(e){
    var curso_id=e.target.value;

    //Se carga la tabla alumnos con los alumnos del curso seeccionado
    $.get('/asistencias/curso/'+curso_id+"", function(response,state){
        $("#tablaAlumnos").empty();
        for(i=0;i<response.length;i++){
          $("#tablaAlumnos").append("<tr><td><strong>"+response[i].apellido+","+response[i].nombre+"</strong></td><td><div aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative; text-align:center;\"><input type=\"checkbox\" class=\"rows-check\" name=\"asistio["+i+"]\" value=\""+response[i].dni+"\" style=\"\"><ins class=\"iCheck-helper\" style=\"\"></ins></div></td></tr>");
        }
    });

    //Obetner por ajax las materias en base a el curso seleccionado
    $.get('/asistencias/materia/'+curso_id+"", function(response,state){
        $("#seleccionMateria").empty();

        for(i=0;i<response.length;i++)
          { 
            $("#seleccionMateria").append("<option value='"+response[i].id+"'>"+response[i].titulo+"- , Cursada: "+response[i].dia_cursada+" "+response[i].hora_cursada+"</option>")
          };
          
        });
    
    $("#seleccionMateria").prepend("<option value=\"\" selected>Seleccione ...</option>")

    //En caso de seleccionar la opcion Seleccion se borra la tabla de alumnos
    if(curso_id="10000000000"){$("#tablaAlumnos").empty();}

  });


</script>


@endsection