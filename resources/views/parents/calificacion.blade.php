@extends('layouts.general') 

@section('title','Comunicados- Acceso Estudiantes') 

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
    <h1>Calificaciones de los alumnos</h1>
  </div>
    
    <br>
    @if(count($hijos)>1)
      @foreach($hijos as $hijo)
            <button class="buttonAlumno btn btn-blue-3" onclick="verInfoHijo({{$hijo->alumno_id}})">
              <div class="col-md-6 foto">
              <img src="{{URL::asset($hijo->foto_url)}}">
              </div>
              <div class="col-md-6 datos" >
              <b>{{$hijo->apellido}},{{$hijo->nombre}}</b> <br>{{$hijo->grado}} año <br> Turno: {{$hijo->turno}}
              </div>
            </button>
      @endforeach
    @endif
    <br><br>
    <div id="tabCalificaiones">

      <ul id="demo1" class="nav nav-tabs">
        {{--         
          <li class="active">
              <a href="#matematica" data-toggle="tab" aria-expanded="true">Matemática</a>
          </li>
          <li class="">
              <a href="#filosofia" data-toggle="tab" aria-expanded="false">Filosofía</a>
          </li>
        --}}
      </ul>

      <div id="calificaciones" class="tab-content">
      </div>
      <!-- / .tab-content -->

    </div>



</div>
 

@include('layouts.footer') 

@endsection 


@section ('javascript') 
<script type="text/javascript">
  function verInfoHijo(alumno_id) {
        
        $('#tabCalificaiones').hide();
        $.get('/calificaciones/vistaTutor/materias/' +alumno_id+ "", function (response, state) {

          $('#tabCalificaiones').show();
          $("#demo1").empty();
          for(i = 0; i < response.length; i++)
          {
            if(i==0){$first="active";}else{$first=null;}
            $("#demo1").append("<li class="+$first+"><a href=\"#"+response[i].titulo+"\" data-toggle=\"\" aria-expanded=\"true\">"+response[i].titulo+"</a></li>");
          }

          //alert(response[1].titulo);
          //for (i = 0; i < response.length; i++) {}  
        });

        $.get('/calificaciones/vistaTutor/' +alumno_id+ "", function (response, state) {
          for(i = 0; i < response.length; i++)
          {
            if(i==0){$activo="active in";}else{$activo=null;}

            if(response[i].estado_aprobacion="0"){
              $estado="<span class=\"label label-danger\">Desaprobado</span>"
            }else{
              $estado="<span class=\"label label-success\">Aprobado</span>"
            }

            $("#calificaiones").append("<div class=\"tab-pane fade " + $activo +" id="+response[i].titulo+"><br><div class=\"table-responsive\"><table data-sortable=\"\" class=\"table\" data-sortable-initialized=\"true\"><thead><tr><th>Fecha</th><th>Materia</th><th>Temas</th><th>Calificación</th><th>Estado</th></tr></thead><tbody><tr><td>"+response[i].titulo+"</td><td>"+ response[i].materia+"</td><td>"+ response[i].temas+"</td><td>"+ response[i].calificaion+"</td><td>"+$estado+"</td></tr></tbody></table></div>");
          }
            
        });




                    

    }
</script>
@endsection