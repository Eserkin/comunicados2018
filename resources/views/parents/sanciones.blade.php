@extends('layouts.general')
@section('title','Comunicados- Menciones y sanciones por buen comportamiento')
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

  <div class="page-heading">
    <h1>Sanciones por mal comportamiento</h1>
  </div>

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


<div class="row">
  <div class="col-md-12">
    <div>
      
    </div>
    @if(count($sanciones)>=1)
    <div class="widget">
      <div class="widget-content">
        <div class="table-responsive">

          <table data-sortable="" class="table" data-sortable-initialized="true">
            <thead>
              <tr>
                <th>Fecha</th>
                <th>Motivo</th>
                <th>Registrada por.</th>
                @if((Auth::user()->tipo)=="tutor")
                <th>Firma del tutor</th>
                @endif
              </tr>
            </thead>
            <tbody>
              @foreach($sanciones as $sancion)
              <tr class="fila" data-type="{{$sancion->recibe_dni}}">
                <td>{{$sancion->created_at}}</td>
                <td>{{$sancion->mensaje}}</td>
                <td>{{$sancion->nombre}},{{$sancion->apellido}}</td>
                
                <td>
                  @if(($sancion->fue_firmado)==1)
                  <span class="label label-success">Firmado</span>
                  @elseif(($sancion->fue_firmado)==0)
                  <a data-modal="md-fade-in-scale-up" class="btn btn-danger btn-sm md-trigger" id="popUpFirma"  onclick="FunctionBTN({{$sancion->id}})">Firmar Sanción</a>
                  @endif
                </td>
                
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    @else
    <h4>No se encontraron sanciones hasta la fecha</h4>
    @endif
  </div>
</div>

<!--  Se incluye el pop up para firmar-->
@include('parents.botonFirmar')

@include('layouts.footer')

@endsection

@section ('javascript')
  <script>
  function verInfoHijo($id) {
        //$(this).addClass("btnAlumnoActive");
        //$('.buttonAlumno').addClass("btnAlumnoActive");
        $('.fila').hide();
        $('.fila').each(function(i, el){
            if($(el).attr('data-type') == $id) {
                 $(el).show();
             }
        })
    }


    //Se cargan los campos ocultos del popup con el ID del elemento seleccionado
    function FunctionBTN($id) {
        $("#current_msj_id").val($id);

        var $coord1=  $.trim($("#Coord1").text());
        $("#lblCoord1").val($coord1);

        var $coord2=  $.trim($("#Coord2").text());
        $("#lblCoord2").val($coord2);
    }

    function FunctionFirmar(event){
    event.preventDefault();
    var url="/validarFirma/";
    var data= $('#formCoordenadas').serialize();
    $.post(url,data,function(result){
        if(result){
          $('#msgFail').fadeOut();
          $('#msgSuccess').fadeIn();
          setTimeout(function() {
               $(".md-fade-in-scale-up").removeClass("md-show");
            }, 3000);    
          setTimeout(function() {
               window.location.reload();
            }, 200);
        }else{
          $('#msgFail').fadeIn();   
          setTimeout(function() {
               $(".md-fade-in-scale-up").removeClass("md-show");
            }, 1000);
          setTimeout(function() {
               window.location.reload();
            }, 200);     
        }
      })
  }
   
  </script>
@endsection