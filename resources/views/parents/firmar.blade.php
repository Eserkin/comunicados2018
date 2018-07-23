@extends('layouts.general')
@section('title','Comunicados- Acceso Tutores')
@section ('styles')
@endsection
@section ('sidebar')
@include('parents.parents_sidebar')
@endsection
@section ('content')


<div class="page-heading">
  <h1>Mensajes pendientes de firma</h1>
</div>
<div class="row">
  <div id="tipoMensajes" class="col-md-12">
    <div class="menu-folders">
      <span><i class="fa fa-circle text-blue-1"></i> Permisos</span>
      <span><i class="fa fa-circle text-yellow-1"></i> Mensajes Privados</span>
      <span><i class="fa fa-circle text-lightblue-1"></i> Citatorios</span>
      <span><i class="fa fa-circle text-green-1"></i> Distinciónes</span>
      <span><i class="fa fa-circle text-yellow-2"></i> Observaciónes de disciplina</span>
      <span><i class="fa fa-circle text-red-1"></i> Sanciónes</span>
    </div>
  </div>
</div>

    <div id="msgSuccess" class=" alert alert-success alert-dismissable " style="display:none;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong>El Mensaje fue firmado</strong>
    </div>

    <div id="msgFail" class=" alert alert-danger alert-dismissable " style="display:none;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong>Coordenadas incorrectas. El mensaje no se pudo firmar</strong>
    </div>

@if(count($sinFirmar)>=1)
<div class="col-sm-12 portlets">
@foreach($sinFirmar as $sinFirmarS)

@if(($sinFirmarS->tipo)==2)
<div class="widget blue-1">
@elseif(($sinFirmarS->tipo)==3)
<div class="widget yellow-1">
@elseif(($sinFirmarS->tipo)==4)
<div class="widget lightblue-1">
@elseif(($sinFirmarS->tipo)==5)
<div class="widget green-1">
@elseif(($sinFirmarS->tipo)==6)
<div class="widget yellow-2">
  @elseif(($sinFirmarS->tipo)==7)
  <div class="widget red-1">
    @endif

    

    <div class="widget-header">

      <h2>{{$sinFirmarS->asunto}}</h2>
      <div class="additional-btn">
        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
      </div>
    </div>
    <div class="widget-content padding">
      <p>{{$sinFirmarS->mensaje}}</p>
    </div>
    <div class="widget-footer">
      <div class="pull-right">
        <a data-modal="md-fade-in-scale-up" class="btn btn-danger btn-sm md-trigger" id="popUpFirma"  onclick="FunctionBTN({{$sinFirmarS->id}})">Firmar Mensaje</a>
      </div>
    </div>
  </div>
  @endforeach

</div>

@else

<h3>Muy bien !!!!</h3>
<h4>Por el momento no tiene mensajes pendientes de firma</h4>

@endif

<!--  Se incluye el pop up para firmar-->
@include('parents.botonFirmar')

@include('layouts.footer')
@endsection

@section ('javascript')
<script type="text/javascript">

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
          $(".md-fade-in-scale-up").removeClass("md-show");
          $('#msgSuccess').fadeIn();
            setTimeout(function() {
               window.location.reload();
            }, 1000);
        }else{
          $(".md-fade-in-scale-up").removeClass("md-show");
          $('#msgFail').fadeIn();
        }
      })
  }

</script>



@endsection