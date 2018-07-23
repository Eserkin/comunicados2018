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
  <div class="row top-summary">
    <div class="col-lg-3 col-md-6">
      <div class="widget green-1 animated fadeInDown">
        <div class="widget-content padding">
          <div class="widget-icon">
            <i class="icon-globe-inv"></i>
          </div>
          <div class="text-box">
            <p class="maindata">TOTAL <b>VISITORS</b></p>
            <h2><span class="animate-number" data-value="25153" data-duration="3000">25,153</span></h2>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="widget-footer">
          <div class="row">
            <div class="col-sm-12">
              <i class="fa fa-caret-up rel-change"></i> <b>39%</b> increase in traffic
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="widget darkblue-2 animated fadeInDown">
        <div class="widget-content padding">
          <div class="widget-icon">
            <i class="icon-bag"></i>
          </div>
          <div class="text-box">
            <p class="maindata">TOTAL <b>SALES</b></p>
            <h2><span class="animate-number" data-value="6399" data-duration="3000">6,399</span></h2>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="widget-footer">
          <div class="row">
            <div class="col-sm-12">
              <i class="fa fa-caret-down rel-change"></i> <b>11%</b> decrease in sales
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="widget orange-4 animated fadeInDown">
        <div class="widget-content padding">
          <div class="widget-icon">
            <i class="fa fa-dollar"></i>
          </div>
          <div class="text-box">
            <p class="maindata">OVERALL <b>INCOME</b></p>
            <h2>$<span class="animate-number" data-value="70389" data-duration="3000">70,389</span></h2>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="widget-footer">
          <div class="row">
            <div class="col-sm-12">
              <i class="fa fa-caret-down rel-change"></i> <b>7%</b> decrease in income
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="widget lightblue-1 animated fadeInDown">
        <div class="widget-content padding">
          <div class="widget-icon">
            <i class="fa fa-users"></i>
          </div>
          <div class="text-box">
            <p class="maindata">TOTAL <b>USERS</b></p>
            <h2><span class="animate-number" data-value="18648" data-duration="3000">18,648</span></h2>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="widget-footer">
          <div class="row">
            <div class="col-sm-12">
              <i class="fa fa-caret-up rel-change"></i> <b>6%</b> increase in users
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
  
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
                  <th data-sortable="false" data-sorted="false">Firmar Inasistencia</th>
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

           if(response[i].asiste == 0 && response[i].firma == 0 ){
              $debeFirmar="<a data-modal=\"md-fade-in-scale-up\" class=\"botonModal btn btn-danger btn-sm md-trigger\">Firmar Mensaje</a>";
           }else{
              $debeFirmar=" ";
           }

          $("#tablaAsistencias").append("<tr><td>"+response[i].fecha+"</td><td>"+response[i].titulo+"</td><td>"+response[i].dia_cursada + response[i].hora_cursada+ "</td><td>"+$asiste+"</td><td>"+$debeFirmar+"</td></tr>");
        }

        $( ".botonModal" ).click(function() {
          $(".md-fade-in-scale-up").addClass("md-show");
        });

        $( ".md-close" ).click(function() {
          $(".md-fade-in-scale-up").removeClass("md-show");
        });

        $( ".md-overlay" ).click(function() {
          $(".md-fade-in-scale-up").removeClass("md-show");
        });

      });

    });


/*            
              "<tr>
                  <td>"+response[i].fecha+"</td>
                  <td>"+response[i].titulo+"</td>
                  <td>"+response[i].dia_cursada + response[i].hora_cursada+ "</td>
                  <td>"+$asiste+"</td>
                  <td>"+$debeFirmar+"</td>
              </tr>"
*/

</script>


@endsection