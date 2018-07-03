@extends('layouts.general')

@section('title','Comunicados - Ver Escuela')


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
	            <!-- Page Heading Start -->
                <div class="page-heading">
                    <h1><i class='fa fa-bell-o'> </i>&nbsp;&nbsp;Ver datos de Escuelas</h1>
                </div>
                <!-- Page Heading End-->
                <form class="form-horizontal">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="email">NOMBRE:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $school->nombre}}</p>
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="control-label col-sm-2" for="email">ID:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $school->id}}</p>
                    </div>
                  </div>
				          <div class="form-group">
                    <label class="control-label col-sm-2" for="email">PROVINCIA:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $school->provincia}}</p>
                    </div>
                  </div>
				                    <div class="form-group">
                    <label class="control-label col-sm-2" for="email">DIRECCION:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $school->direccion}}</p>
                    </div>
                  </div>
				                    <div class="form-group">
                    <label class="control-label col-sm-2" for="email">LOCALIDAD:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $school->localidad}}</p>
                    </div>
                  </div>
				                    <div class="form-group">
                    <label class="control-label col-sm-2" for="email">TELEFONO:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $school->telefono}}</p>
                    </div>
                  </div>
				                    <div class="form-group">
                    <label class="control-label col-sm-2" for="email">E-MAIL:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $school->email}}</p>
                    </div>
                  </div>

				                    <div class="form-group">
                    <label class="control-label col-sm-2" for="email">NIVEL:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $school->nivel}}</p>
                    </div>
                  </div>

				          <div class="form-group">
                    <label class="control-label col-sm-2" for="email">MODALIDAD:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $school->modalidad}}</p>
                    </div>
                  </div>				  
				  
                </form>
                
                @include('layouts.footer')
@endsection


@section ('javascript')
@endsection