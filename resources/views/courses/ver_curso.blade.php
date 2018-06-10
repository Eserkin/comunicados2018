@extends('layouts.general')

@section('title','Comunicados - Ver Curso')


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
                    <h1><i class='fa fa-calendar'> </i>&nbsp;&nbsp;Ver Curso</h1>
                </div>
                <!-- Page Heading End-->
                <form class="form-horizontal">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="email">GRADO:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $course->grado}}</p>
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="control-label col-sm-2" for="email">ID:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $course->id}}</p>
                    </div>
                  </div>
				                    <div class="form-group">
                    <label class="control-label col-sm-2" for="email">NIVEL:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $course->nivel}}</p>
                    </div>
                  </div>
				                    <div class="form-group">
                    <label class="control-label col-sm-2" for="email">AULA:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $course->aula}}</p>
                    </div>
                  </div>
				                    <div class="form-group">
                    <label class="control-label col-sm-2" for="email">TURNO:</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">{{ $course->turno}}</p>
                    </div>
                  </div>			  
				  
                </form>
                
                @include('layouts.footer')
@endsection


@section ('javascript')
@endsection