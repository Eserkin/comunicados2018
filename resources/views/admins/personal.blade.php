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
		<h1><i class='fa fa-envelope'></i>Staff del colegio</h1>
	</div>
	<!-- Page Heading End-->
	<!-- Your awesome content goes here -->
	<div class="row">

		<div class="col-md-12">
			<div class="widget">
				<div class="widget-header">
					<h2><strong>Personal</strong></h2>
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
										<th>Legajo</th>
										<th>DNI</th>
										<th>Nombre</th>
										<th>Escuela</th>
										<th>Cargo</th>
										<th>Estado</th>
										<th>Editar</th>
										<th>Alta/Baja</th>
									</tr>
								</thead>

								<tfoot>
									<tr>
										<th>Legajo</th>
										<th>DNI</th>
										<th>Nombre</th>
										<th>Escuela</th>
										<th>Cargo</th>
										<th>Estado</th>
										<th>Editar</th>
										<th>Alta/Baja</th>
									</tr>
								</tfoot>

								<tbody>
									@foreach($staff as $ustaff)
									<tr>
										<td>{{$ustaff->n_legajo}}</td>
										<td>{{$ustaff->dni}}</td>
										<td>{{$ustaff->nombre}}.{{$ustaff->apellido}}</td>
										<td>{{$ustaff->escuela}}</td>
										<td>{{$ustaff->cargo}}</td>
										@if($ustaff->estado==1)
											<td style="color:green">Activo</td>
											@else
											<td style="color:red">Inactivo</td>
										@endif
										<td>
											<a href="/admin/personal/editar/{{ $ustaff->dni }}" class="btn btn-success btn-sm" role="button">Editar</a>
										</td>
										<td>
											<a href="/admin/personal/cambiarEstado/{{ $ustaff->dni }}"  role="button">
												@if($ustaff->estado==1)
												<span class="btn btn-danger btn-sm">Dar de baja</span>
												@else
												<span class="btn btn-success btn-sm">Dar de alta</span>
												
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
