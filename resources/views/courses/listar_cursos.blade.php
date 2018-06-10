@extends('layouts.general')

@section('title','Listado de Cursos')


@section ('styles')
@endsection


@section ('sidebar')
  @if(Auth::user()->tipo=="personal")
    @include('schools.school_sidebar')
  @elseif(Auth::user()->tipo=="tutor")
    @include('parents.parents_sidebar')
  @elseif(Auth::user()->tipo=="alumno")
    @include('students.student_sidebar')
  @elseif(Auth::user()->tipo=="admin")
    @include('admins.admin_sidebar')
  @endif
@endsection


@section ('content')
	            <div class="page-heading">
            		<h1><i class='fa fa-calendar'></i>Listado de cursos</h1>
            	</div>
            	<!-- Page Heading End-->
				<!-- Begin Inbox -->
				<div class="widget transparent box-messages">
					<div class="row">
						<div class="col-sm-3 col-sm-offset-9">
						<form class="form-horizontal" role="form">
							<div class="col-sm-9 col-sm-offset-3">
								<div class="form-group form-search search-box has-feedback">
								  <input type="text" class="form-control full-rounded" id="inputSuccess5" placeholder="Search..">
								  <a class="btn btn-link" href="#"><span class="fa fa-search form-control-feedback"></span></a>
								</div>
							</div>
						</form>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="mail-list">
							<div class="clearfix"></div>

							<!-- Toolbar message -->
							<div class="data-table-toolbar">
								<div class="row">
									<div class="col-sm-4 hidden-xs">
										<div class="pull-right">
											<span class="paging-status">{!!$courses->lastItem()!!} de {!!$courses->total()!!}</span>
											<div class="btn-group">
											  <a class="btn btn-default" href="{!!$courses->previousPageUrl()!!}"><i class="fa fa-chevron-left"></i></a>
											  <a class="btn btn-default" href="{!!$courses->nextPageUrl()!!}"><i class="fa fa-chevron-right"></i></a>
											</div>
											<div class="btn-group">
											  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
												<i class="fa fa-cog"></i>
											  </button>
											  <ul class="dropdown-menu pull-right" role="menu">
												<li><a href="#fakelink">Action</a></li>
												<li><a href="#fakelink">Another action</a></li>
												<li><a href="#fakelink">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#fakelink">Separated link</a></li>
											  </ul>
											</div>
										</div>
									</div><!-- End div .col-sm-3 -->
								</div><!-- End div .row -->
							</div><!-- End div .data-table-toolbar -->
							<!-- End toolbar message -->


							<!-- Message table -->
							<div class="table-responsive">
								<table class="table table-hover table-message">
									<thead>
										<tr class="unread">
											<td style="width: 20px"></td>
											<td>ID</td>
											<td>GRADO</td>
											<td>NIVEL</td>
											<td>AULA</td>
											<td>TURNO</td>
											<td>FECHA</td>
											<td>OPERACION</td>
                      <td>MODIFICAR</td>
										</tr>
									</thead>
									<tbody>
										@foreach($courses as $course)
										<tr class="unread">
											<td style="width: 20px"><input type="checkbox" class="rows-check"></td>
											<td>{{$course->id}}</td>
											<td>{{$course->grado}}</td>
											<td>{{$course->nivel}}</td>
											<td>{{$course->aula}}</td>
											<td>{{$course->turno}}</td>
											<td>{{$course->created_at}}</td>
											<td>
											<a href='/admin/cursos/show/{{$course->id}}' class="btn btn-success btn-sm" role="button">Ver</a>
											</td>
                      <td>
											<a href='/admin/cursos/cambiar_curso/{{$course->id}}' class="btn btn-success btn-sm" role="button">Modificar</a>
											</td>
										</tr>

										@endforeach

									</tbody>
								</table>
							</div><!-- End div .table-responsive -->
							<!-- End message table -->

							<!-- Footer message toolbar -->
							<div class="data-table-toolbar-footer">
								<div class="pull-right">
									{!!$courses->render()!!}
								</div><!-- End div .pull-right -->
							</div><!-- End div .data-table-toolbar -->
							<!-- End Footer message toolbar -->
							</div>
						</div><!-- End div .col-md-10 -->
					</div><!-- End div .row -->
				</div><!-- End div .box-info -->
				<!-- End inbox -->

                @include('layouts.footer')
@endsection


@section ('javascript')
@endsection
