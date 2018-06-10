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
                                    <a data-modal="md-fade-in-scale-up" class="btn btn-danger btn-sm md-trigger">Firmar Mensaje</a>
                                </div>
                            </div>
        </div>
	@endforeach
    	
</div>
@else
	<h3>Muy bien !!!!</h3>
	<h4>Por el momento no tiene mensajes pendientes de firma</h4>
@endif

    <!-- Contenido del Modal  -->
   

    <div class="md-modal md-fade-in-scale-up" id="md-fade-in-scale-up">
      <div class="md-content">
        <h3 style="padding-bottom:0px;">¿Esta seguro que deséa firmar el mensaje?</h3>
        <div>
          <p style=" padding-top: 0px;margin-bottom:20px; text-align:center;">Ingrese las coordenadas de su trajeta TOKEN</p>
          <div class="form-group">
            <label class="col-sm-2 control-label">
              @php
                echo chr(rand(ord("A"), ord("B")));
                echo rand(1, 9);
              @endphp  :
            </label>
            <div class="col-sm-4">
              <input type="text" class="form-control">
            </div>
            <label class="col-sm-2 control-label">
              @php
                echo chr(rand(ord("A"), ord("B")));
                echo rand(1, 9);
              @endphp  :
            </label>
            <div class="col-sm-4">
              <input type="text" class="form-control">
            </div>
          </div>

          <div class="form-group" style="margin-top:20px; position:relative;top:20px; text-align:center">
            <button class="btn btn-danger md-close">Cerrar</button>
            <button class="btn btn-success ">Firmar Mensaje</button>
          </div>
        </div>
      </div><!-- End div .md-content -->
    </div><!-- End div .md-modal .md-fade-in-scale-up -->


                @include('layouts.footer')
@endsection


@section ('javascript')
@endsection