@extends('layouts.general')

@section('title','Comunicados- Acceso Estudiantes')


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
<div class="content">
	<h1>NOTAS FINALES- Por periodo</h1>
		<div class="grid-example">
			<div class="col-md-12"><h3>PRIMER PERIODO</h3>
				<div class="row">
					<div class="col-xs-12 col-md-6">MATERIA</div>
					<div class="col-xs-6 col-md-4">NOTA</div>
					<div class="col-xs-6 col-md-2">FIRMADO</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6">Matemática</div>
					<div class="col-xs-6 col-md-4">8</div>
					<div class="col-xs-6 col-md-2">SI</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6">Literatura</div>
					<div class="col-xs-6 col-md-4">7</div>
					<div class="col-xs-6 col-md-2" style="color:red;">NO</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6">Filosofía</div>
					<div class="col-xs-6 col-md-4">6</div>
					<div class="col-xs-6 col-md-2">SI</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6">Geografía</div>
					<div class="col-xs-6 col-md-4">7</div>
					<div class="col-xs-6 col-md-2">SI</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6">Informática</div>
					<div class="col-xs-6 col-md-4">2</div>
					<div class="col-xs-6 col-md-2">SI</div>
				</div>
			</div>
			<div class="col-md-12"><h3>SEGUNDO PERIODO</h3>
				<div class="row">
					<div class="col-xs-12 col-md-6">Matemática</div>
					<div class="col-xs-6 col-md-4">8</div>
					<div class="col-xs-6 col-md-2" style="color:red;">NO</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6">Literatura</div>
					<div class="col-xs-6 col-md-4">7</div>
					<div class="col-xs-6 col-md-2">SI</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6">Filosofía</div>
					<div class="col-xs-6 col-md-4">9</div>
					<div class="col-xs-6 col-md-2">SI</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6">Geografía</div>
					<div class="col-xs-6 col-md-4">7</div>
					<div class="col-xs-6 col-md-2">SI</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6">Informática</div>
					<div class="col-xs-6 col-md-4">6</div>
					<div class="col-xs-6 col-md-2" style="color:red;">NO</div>
				</div>
			</div>
			<div class="col-md-12"><h3>TERCER PERIODO</h3>
				<div class="row">
					<div class="col-xs-12 col-md-6">Matemática</div>
					<div class="col-xs-6 col-md-4">6</div>
					<div class="col-xs-6 col-md-2">SI</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6">Literatura</div>
					<div class="col-xs-6 col-md-4">8</div>
					<div class="col-xs-6 col-md-2" style="color:red;">NO</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6">Filosofía</div>
					<div class="col-xs-6 col-md-4">2</div>
					<div class="col-xs-6 col-md-2">SI</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6">Geografía</div>
					<div class="col-xs-6 col-md-4">4</div>
					<div class="col-xs-6 col-md-2">SI</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6">Informática</div>
					<div class="col-xs-6 col-md-4">8</div>
					<div class="col-xs-6 col-md-2" style="color:red;">NO</div>
				</div>
			</div>

		</div>
</div>
                @include('layouts.footer')
@endsection


@section ('javascript')
@endsection