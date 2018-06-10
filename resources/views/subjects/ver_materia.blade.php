@extends('layouts.general')

@section('title','Comunicados - Ver Materia')


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
                    <h1><i class='fa fa-book'> </i>&nbsp;&nbsp;Ver Materia</h1>
                </div>
                <!-- Page Heading End-->
                <form class="form-horizontal">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="email">TITULO:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $subject->titulo}}</p>
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="control-label col-sm-2" for="email">ID:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $subject->id}}</p>
                    </div>
                  </div>
				                    <div class="form-group">
                    <label class="control-label col-sm-2" for="email">PROFESOR:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $profesor->apellido . ' ' . $profesor->nombre}}</p>
                    </div>
                  </div>
				                    <div class="form-group">
                    <label class="control-label col-sm-2" for="email">DIA CURSADA:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $subject->dia_cursada}}</p>
                    </div>
                  </div>
				                    <div class="form-group">
                    <label class="control-label col-sm-2" for="email">HORA CURSADA:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $subject->hora_cursada}}</p>
                    </div>
                  </div>
				                    <div class="form-group">
                    <label class="control-label col-sm-2" for="email">ESCUELA:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $school->nombre}}</p>
                    </div>
                  </div>				  
				  
                </form>
                
                @include('layouts.footer')
@endsection


@section ('javascript')
@endsection