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
		<h1><i class='fa fa-envelope'></i>Asociar tutor con alumno</h1>
	</div>
	<!-- Page Heading End-->



	<!-- Your awesome content goes here -->
	<div class="row">
		<div class="col-md-12">
			<div class="widget">
				<div class="widget-content">
					<br><br>
					<div class="table-responsive">
						<form class='form-horizontal' role="form" action="/admin/asociarTutor" method="post" >
							<table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
								<tbody  class="col-md-12">
									<tr>
										<td  class="col-md-6">Seleccione el alumno al que le desea asignar un tutor </td>
										<td class="col-md-6">
											<select class="form-control input-invis" style="font-size:20px;"  id="alumno" name="alumno">
											 <option value="0">seleccione</option>
										    @foreach ($alumnos as $alumno)
										     <option value="{{$alumno->id}}">{{$alumno->apellido}}, {{$alumno->nombre}} - DNI: {{$alumno->id}}  / {{$alumno->grado}} año </option>
										    @endforeach
			   							</select>
										</td>
									</tr>
									
									<tr>
										<td  class="col-md-6">Seleccione al Tutor </td>
										<td class="col-md-6">
											<select class="form-control input-invis" style="font-size:20px;"  id="tutor" name="tutor">
											 <option value="0">seleccione</option>
										    @foreach ($tutores as $tutor)
										     <option value="{{$tutor->id}}">{{$tutor->apellido}}, {{$tutor->nombre}}  - DNI: {{$tutor->id}}</option>
										    @endforeach
			   							</select>
										</td>
									</tr>
								</tr>
								<tr>
								</tbody>
							</table>
						</div>
						<br><br>
						 <div class="col-md-12">
								 <input type="hidden" name="_token" value="{{ csrf_token() }}">
								 <button type="submit" class="btn btn-lg btn-success"><i class="icon-paper-plane-1"></i> Asociar</button>
						 </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>



<!---->
	@include('layouts.footer')
@endsection


@section ('javascript')

@endsection
