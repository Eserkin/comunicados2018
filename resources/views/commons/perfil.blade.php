@extends('layouts.general')

@section('title','Comunicados- Acceso Docentes')


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
                    <h1><i class='fa fa-user'> </i>&nbsp;&nbsp;Perfil de Usuario</h1>
                </div>
                <!-- Page Heading End-->
                <form class="form-horizontal">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="email">DNI:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ Auth::user()->dni}}</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Nombre:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ Auth::user()->nombre}} {{ Auth::user()->apellido}}</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ Auth::user()->email}}</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Fecha de Nacimiento:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ Auth::user()->fecha_nacimiento }}</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Teléfono:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ Auth::user()->telefono}}</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Celular:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ Auth::user()->celular}}</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Dirección:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ Auth::user()->direccion}}, {{ Auth::user()->localidad}}, {{ Auth::user()->provincia}}</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Tipo de Usuario:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ Auth::user()->tipo}}</p>
                    </div>
                  </div>
                </form>
                
                @include('layouts.footer')
@endsection


@section ('javascript')
@endsection