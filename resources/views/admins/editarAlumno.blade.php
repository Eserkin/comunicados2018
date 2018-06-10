@extends('layouts.general')

@section('title','Comunicados- Acceso Administrador')


@section ('styles')

@endsection


@section ('sidebar')
	@include('admins.admin_sidebar')
@endsection

@section ('content')
	<!-- Page Heading Start -->
	<div class="page-heading">
		<h1><i class='fa fa-envelope'></i>Editar Alumno</h1>
	</div>
<!--@<?php echo $alumno{0}->dni ?>-->
<form method="put" action="/admin/alumnos/actualizar/{{ $alumno{0}->dni}}">
  {!! csrf_field() !!}
  <div class="form-group">
    <label class="col-md-12"for="matricula" style="font-size:20px;">Numero de matricula</label>
    <input type="text" name="matricula" class="form-control" value="{{$alumno{0}->n_matricula}} " />
  </div>

  <button type="submit" class="col-md-12" style="font-size:20px;">Actualizar cambios</button>
</form>


@include('layouts.footer')
@endsection


@section ('javascript')

@endsection
