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
  <form role="form">
    <div class="form-group">
      <label class="control-label">Escuela:</label>
      <select class="form-control ">
        <option>Seleccione Escuela ...</option>
        <option>Escuela nº 14</option>
        <option>Escuela nº 23</option>
      </select>
    </div>
    <div class="form-group">
      <label class="control-label">Curso:</label>
      <select class="form-control">
        <option>Seleccione Curso ...</option>
        <option>6 grado- A. Turno Mañana</option>
        <option>6 grado- B. Turno Tarde</option>
        <option>7 grado- A. Turno Mañana</option>
      </select>
    </div>
    <div class="form-group">
      <label class="control-label">Fecha de la evaluación:</label>
      <div>
        <input type="text" class="form-control datepicker-input" data-mask="99-99-9999" placeholder="mm-dd-yyyy">
      </div>
    </div>
    <div class="form-group">
      <label for="temas" class="control-label">Temas:</label>
      <div>
        <input type="text" class="form-control" id="temas" placeholder="trigonometria 1, calculos">
        <p class="help-block">Ingrese los temas separados por comas.</p>
      </div>
    </div>
    <div class="form-group">
      <label for="descripcion">Breve descripción</label>
      <textarea name="descripcion" style="width:100%; height:100px; display:block" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <label class="control-label">Notificar</label>
      <div >
        <div class="checkbox">
          <label class="">
            <div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" value="" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
            Enviar mensaje a todos los alumnos con la descripción de la evaluación.
          </label>
        </div>
      </div>
      <div >
        <div class="checkbox">
          <label class="">
            <div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" value="" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
            Enviar mensaje a todos los padres o tutores.
          </label>
        </div>
      </div>
    </div>
    <br><br>
    <button type="submit" class="btn btn-danger">Crear evaluación</button>
  </form>
</div>
@include('layouts.footer')
@endsection
@section ('javascript')
@endsection