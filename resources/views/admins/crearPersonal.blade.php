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
		<h1><i class='fa fa-envelope'></i>Crear Personal (staff)</h1>
	</div>
	<!-- Page Heading End-->
	<!-- Your awesome content goes here -->
	<div class="row">
		<div class="col-md-12">
			<div class="widget">
				<div class="widget-header">
					<h2><strong>Ingrese los datos</strong></h2>
					<div class="additional-btn">
						<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
					</div>
				</div>
				<div class="widget-content">
					<br>
					<div class="table-responsive">
						<form class='form-horizontal' role="form" action="/admin/crearPersonal" method="post" >
							<table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
								<tbody  class="col-md-6">
									<tr>
										<td  class="col-md-6">Seleccione rol de personal que desea crear: </td>
										<td class="col-md-6">
											<select class="form-control input-invis" style="font-size:20px;"  id="rol" name="rol">
											 <option value="0">seleccione</option>
										    @foreach ($role as $rol)
										     <option value="{{$rol->id}}">{{$rol->cargo}}</option>
										    @endforeach
			   							</select>
										</td>
									</tr>
									<tr>
										<td  class="col-md-6">Dni: </td>
										<td class="col-md-6"><input type="text" maxlength="11" name="dni"></td>
									</tr>
									<tr>										<td  class="col-md-6">Nombre: </td>
										<td class="col-md-6"><input type="text" name="nombre"></td>
									</tr>
									<tr>
										<td  class="col-md-6">Apellido: </td>
										<td class="col-md-6"><input type="text" name="apellido"></td>
									</tr>
									<tr>
										<td  class="col-md-6">Sexo: </td>
										<td class="col-md-6">
											<input type="radio" name="sexo" value="masculino" > Masculino<br>
											<input type="radio" name="sexo" value="femenino" > Femenino<br>
											<input type="radio" name="sexo" value="otro" > Otro<br>
										</td>
									</tr>
									<tr>
										<td  class="col-md-6">Email: </td>
										<td class="col-md-6"><input type="email" name="email"></td>
									</tr>
									<tr>
										<td  class="col-md-6">Password: </td>
										<td class="col-md-6"><input type="password" name="password"></td>
									</tr>
									<tr>
										<td  class="col-md-6">Fecha de nacimiento: </td>
										<td class="col-md-6"><input type="date" min="1989-01-02"name="nacimiento"></td>
									</tr>
									<tr>
										<td  class="col-md-6">Telefono fijo: </td>
										<td class="col-md-6"><input type="text" name="tel"></td>
									</tr>
									<tr>
										<td  class="col-md-6">Telefono movil: </td>
										<td class="col-md-6"><input type="text" name="movil"></td>
									</tr>
									<tr>
										<td  class="col-md-6">Direccion: </td>
										<td class="col-md-6"><input type="text" name="direccion"></td>
									</tr>
									<tr>
										<td  class="col-md-6">Localidad </td>
										<td class="col-md-6"><input type="text" name="localidad"></td>
									</tr>
									<tr>
										<td  class="col-md-6">Provincia: </td>
										<td class="col-md-6"><input type="text" name="provincia"></td>
									</tr>
									<tr>
										<td  class="col-md-6">Foto: </td>
										<td class="col-md-6">
											<input type="file" id="myfile" name="foto_url" class="rm-input" value="cargar" onchange="selectedFile();"/>
											<input type="button" value="Subir Archivo" onClick="uploadFile()" class="rm-button" /></li>
											<progress id="progressBar" value="0" max="100" class="rm-progress"></progress>
										</td>
									</tr>
								</tr>
								<tr>
								</tbody>
							</table>
						</div>
						 <div class="col-md-12">
								 <input type="hidden" name="_token" value="{{ csrf_token() }}">
								 <button type="submit" class="btn btn-lg btn-success"><i class="icon-paper-plane-1"></i> Guardar cambios</button>
						 </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>



<!---------------------------------------------------------------------->
	@include('layouts.footer')
@endsection


@section ('javascript')

@endsection
