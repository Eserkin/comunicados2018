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
		<h1><i class='fa fa-envelope'></i>Alumnos del colegio</h1>
	</div>
	<!-- Page Heading End-->
	<!-- Your awesome content goes here -->
	<div class="row">

		<div class="col-md-12">
			<div class="widget">
				<div class="widget-header">
					<h2><strong>Alumnos</strong></h2>
					<div class="additional-btn">
						<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
						<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
						<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
					</div>
				</div>
				<div class="widget-content">
					<br>
					<div class="table-responsive">
						<form class='form-horizontal' role='form'>
							<table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Matricula</th>
										<th>DNI</th>
										<th>Nombre</th>
										<th>Escuela</th>
										<th>Año</th>
										<th>Nivel</th>
										<th>Aula</th>
										<th>Turno</th>
										<th>Estado</th>
										<th>Admin</th>
										<th>Editar</th>
										<th>Alta/Baja</th>
									</tr>
								</thead>

								<tfoot>
									<tr>
										<th>Matricula</th>
										<th>DNI</th>
										<th>Nombre</th>
										<th>Escuela</th>
										<th>Año</th>
										<th>Nivel</th>
										<th>Aula</th>
										<th>Turno</th>
										<th>Estado</th>
										<th>Admin</th>
										<th>Editar</th>
										<th>Alta/Baja</th>
									</tr>
								</tfoot>

								<tbody>
									@foreach($alumno as $alum)
									<tr>
										<td>{{$alum->n_matricula}}</td>
										<td>{{$alum->dni}}</td>
										<td>{{$alum->nombre}}.{{$alum->apellido}}</td>
										<td>{{$alum->escuela}}</td>
										<td>{{$alum->grado}}</td>
										<td>{{$alum->nivel}}</td>
										<td>{{$alum->aula}}</td>
										<td>{{$alum->turno}}</td>
										<td> @if($alum->estado==1)
											Activo
											@else
											De baja
											@endif </td>
										<td>{{$alum->admin}}</td>
										<td>
											<a href="/admin/alumnos/editar/{{ $alum->dni }}" class="btn btn-success btn-sm" role="button">Editar</a>
										</td>
										<td>
											<a href="/admin/alumnos/cambiarEstado/{{ $alum->dni }}" class="btn btn-success btn-sm" role="button">
											@if($alum->estado==1)
											Dar de baja
											@else
											Dar de alta
											@endif</a>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('layouts.footer')
@endsection


@section ('javascript')

@endsection
