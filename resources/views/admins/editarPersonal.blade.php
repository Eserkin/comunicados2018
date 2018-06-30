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
		<h1><i class='fa fa-envelope'></i>Editar Personal</h1>
	</div>
	<!-- Page Heading End-->

	<form method="put" action="/admin/personal/actualizar/{{ $staff->dni}}">
		{!! csrf_field() !!}
		<div class="form-group">
			<label class="col-md-12"for="legajo" style="font-size:20px;">Numero de legajo</label>
			<input type="text" name="legajo" class="form-control" value="{{$staff->n_legajo}} " />
		</div>
		
		<button type="submit" class="col-md-12" style="font-size:20px;">Actualizar cambios</button>
	</form>


                @include('layouts.footer')
@endsection


@section ('javascript')

@endsection
