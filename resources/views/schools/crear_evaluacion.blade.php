@extends('layouts.general')
@section('title','Comunicados- Acceso Admin')
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
  <h1><i class='fa fa-pencil'> </i>&nbsp;&nbsp;Crear Evaluación</h1>
</div>
<!-- Page Heading End-->

<div id="basic-form">

  <!-- Comienzo de formulario-->
  <form class="form-horizontal" role="form" action="crear" method="POST" id"formCrearEvaluacion">

    <div class="col-md-5">

      @include('schools.select_escuela')

      <div class="form-group">
        <label class="control-label">Fecha:</label>
        <div>
          <input type="text" name="fecha" class="form-control datepicker-input" data-mask="99-99-9999" placeholder="mm-dd-yyyy">
        </div>
      </div>
      <div class="form-group">
        <label for="temas" class="control-label">Temas: </label>
        <div>
          <input type="text" class="form-control" name="temas" placeholder="trigonometria 1, calculos ---- (separados por comas):">
        </div>
      </div>
    </div>
    <!-- Fin de 5-col-->
    <div class="col-md-7">
      <div class="form-group">
        <label for="descripcion">Breve descripción</label>
        <textarea name="descripcion" id="descripcion"  style="width:100%; height:100px; display:block" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="opciones" class="control-label">Notificar: </label>
        <div>
          <div class="checkbox">
            <label class="">
              <div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false"><input type="checkbox" name="enviar_alumnos" value="alumnos"><ins class="iCheck-helper"></ins></div>
              Enviar mensaje a todos los alumnos con los detalles de la evaluación.
            </label>
          </div>
        </div>
        <div>
          <div class="checkbox">
            <label class="">
              <div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false"><input type="checkbox" name="enviar_tutores" value="tutores"><ins class="iCheck-helper"></ins></div>
              Incluir también a los padres/ tutores.
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-danger">Crear evaluación</button>
      </div>
    </div>
    <!-- Fin de 7-col-->
  </form>
  <!-- Fin de formulario-->
</div>
<div class="col-md-12">@include('layouts.footer')</div>
@endsection

@section ('javascript')
<script type="text/javascript" src="{{ URL::asset('js/common.js') }}"></script>
@endsection