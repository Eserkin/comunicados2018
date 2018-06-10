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
		<h1><i class='fa fa-envelope'></i>Tutores de alumnos del colegio</h1>
	</div>
	<!-- Page Heading End-->
	<!-- Your awesome content goes here -->
	<div class="row">

		<div class="col-md-12">
			<div class="widget">
				<div class="widget-header">
					<h2><strong>Tutores</strong></h2>
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
										<th>DNI</th>
										<th>Nombre del tutor</th>
										<th>nombre del alumno</th>
										<th>Escuela</th>
										<th>Año</th>
										<th>Nivel</th>
										<th>Aula</th>
										<th>Turno</th>
										<th>Estado</th>
										<th>Admin</th>
										<th>Alta/Baja</th>
									</tr>
								</thead>

								<tfoot>
									<tr>
										<th>DNI</th>
										<th>Nombre del tutor</th>
										<th>nombre del alumno</th>
										<th>Escuela</th>
										<th>Año</th>
										<th>Nivel</th>
										<th>Aula</th>
										<th>Turno</th>
										<th>Estado</th>
										<th>Admin</th>
										<th>Alta/Baja</th>
									</tr>
								</tfoot>

								<tbody>
									@foreach($tutors as $tutor)
									<tr>
										<td>{{$tutor->dni}}</td>
										<td>{{$tutor->nombre}} {{$tutor->apellido}}</td>
										<td>{{$tutor->nombre_alumno}} {{$tutor->apellido_alumno}}</td>
										<td>{{$tutor->escuela}}</td>
										<td>{{$tutor->grado}}</td>
										<td>{{$tutor->nivel}}</td>
										<td>{{$tutor->aula}}</td>
										<td>{{$tutor->turno}}</td>
										<td> @if($tutor->estado==1)
											Activo
											@else
											De baja
											@endif </td>
										<td>{{$tutor->admin}}</td>
										<td>
											<a href="/admin/alumnos/cambiarEstado/{{ $tutor->dni }}" class="btn btn-success btn-sm" role="button">
											@if($tutor->estado==1)
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
