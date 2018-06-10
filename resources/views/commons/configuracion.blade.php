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
                    <h1><i class='fa fa-cogs'> </i>&nbsp;&nbsp;Configuración</h1>
                </div>

                @include('layouts.footer')
@endsection


@section ('javascript')
@endsection