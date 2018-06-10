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
      <label class="control-label">Evaluación:</label>
      <select class="form-control">
        <option>Seleccione Evaluación ...</option>
        <option>Trigonometría- 1 periodo</option>
        <option>Ecuaciones- 1 periodo</option>
        <option>Cálculos Combinados- 2 periodo </option>
        <option>Números Complejos- 2 periodo </option>
        <option>Algebra- 3 periodo</option>
      </select>
    </div>
    <div class="form-group ">
      <label class="control-label">Alumno:</label>
      <select class="form-control">
        <option>Seleccione Alumno ...</option>
        <option>Alegre, Ana María- DNI: 24569812</option>
        <option>Betanni,Aldana - DNI: 24893745</option>
        <option>Fontane,Brian - DNI: 23456743</option>
        <option>Saragoza Facundo - DNI: 24601467</option>
      </select>
    </div>

    <div class="form-group ">
      <label for="temas" class="control-label">Calificación:</label>
      <div>
        <input type="text" class="form-control" id="temas" placeholder="1 al 10">
      </div>
    </div>

    <hr>

    <div class="form-group">
      <a class="file-input-wrapper btn btn btn-default">Subir evaluación<input type="file" class="btn btn-default" title="" style="left: -152px; top: 8px;"></a>
      <p class="help-block">La imagen debe estar en formato .jpg o .png.</p>
    </div>
    <div class="form-group">
      <label class="control-label">Notificar</label>
      <div >
        <div class="checkbox">
          <label class="">
            <div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" value="" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
            Enviar calificación al alumno.
          </label>
        </div>
      </div>
      <div >
        <div class="checkbox">
          <label class="">
            <div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" value="" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
            Enviar calificación al padre o tutor.
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