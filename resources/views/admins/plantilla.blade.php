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
		<h1><i class='fa fa-envelope'></i>Título</h1>
	</div>
	<!-- Page Heading End-->

                @include('layouts.footer')
@endsection


@section ('javascript')

@endsection