@extends('layouts.general')
@section('title','Comunicados- Asistencias del Alumno')
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
    <h1>Asistencias del alumno.</h1>
  </div>
  <hr>

  
  <div class="row">
    <div class="col-md-6">
      
    @include('parents.select_alumno')

    </div>
    <div class="col-md-12">

      <div class="widget">
        <div class="widget-content">
          <div class="table-responsive">
            <table data-sortable=""  class="table table-hover table-striped">
              <thead>
                <tr>
                  <th data-sorted="false">Fecha:</th>
                  <th data-sorted="false">Materia:</th>
                  <th data-sorted="false">Día y horario de cursada:</th>
                  <th  data-sortable="false" data-sorted="false">Estado</th>
                </tr>
              </thead>
              <tbody id="tablaAsistencias">
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@include('parents.botonFirmar')

@include('layouts.footer')
@endsection
@section ('javascript')
<!-- Page Specific JS Libraries -->

<script type="text/javascript" src="{{ URL::asset('js/select_alumno.js') }}"></script>

<script>

    //Cargar tabla de asistencias en base al alumno seleccionado

    $("#seleccionAlumno").on('change', function (e) {
      
      var alumno_dni = e.target.value;

      $.get('/asistencias/vistaTutor/' +alumno_dni+ "", function (response, state) {

        $("#tablaAsistencias").empty();

        for (i = 0; i < response.length; i++) {
          
          if(response[i].asiste == 1){
            $asiste="<span class=\"label label-success\">Presente</span>";
          }else{
            $asiste="<span class=\"label label-warning\">Ausente</span>";
          }

/*           if(response[i].asiste == 0 && response[i].firma == 0 ){
              $debeFirmar="<a data-modal=\"md-fade-in-scale-up\" class=\"botonModal btn btn-danger btn-sm md-trigger\">Firmar Mensaje</a>";
           }else{
              $debeFirmar=" ";
           }
*/

          $("#tablaAsistencias").append("<tr><td>"+response[i].fecha+"</td><td>"+response[i].titulo+"</td><td>"+response[i].dia_cursada + response[i].hora_cursada+ "</td><td>"+$asiste+"</td></tr>");
        }

/* 
       $( ".botonModal" ).click(function() {
          $(".md-fade-in-scale-up").addClass("md-show");
        });

        $( ".md-close" ).click(function() {
          $(".md-fade-in-scale-up").removeClass("md-show");
        });

        $( ".md-overlay" ).click(function() {
          $(".md-fade-in-scale-up").removeClass("md-show");
        });
*/

      });

    });



</script>


@endsection