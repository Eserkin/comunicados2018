@extends('layouts.general')
@section('title','Comunicados- Asistencias')
@section ('styles')
@endsection
@section ('sidebar')
@if(Auth::user()->tipo=="personal")
@include('schools.school_sidebar')
@elseif(Auth::user()->tipo=="tutor")
@include('parents.parents_sidebar')
@elseif(Auth::user()->tipo=="alumno")
@include('students.student_sidebar')
@endif
@endsection
@section ('content')
<div class="content">
  <div class="page-heading">
    <h1>Tomar Asistencias.</h1>
  </div>

  <hr>
  <div class="row">

    <div class="col-md-4">
      <div class="form-group">
        <label class="control-label">Escuela y curso:</label>
        <select class="form-control ">
          <option>Seleccione ...</option>
          <option>Escuela nº 14- 6 grado A. Turno Mañana</option>
          <option>Escuela nº 14- 6 grado B. Turno Tarde</option>
          <option>Escuela nº 23- 7 grado A. Turno Mañana</option>
        </select>
      </div>

      <div class="form-group">
        <label class="control-label">Fecha:</label>
        <div>
          <input type="text" class="form-control datepicker-input" data-mask="99-99-9999" placeholder="mm-dd-yyyy">
        </div>
      </div>
    </div>

    <div class="col-md-8">
      <div class="widget">
        <div class="widget-content">
          <br>          
          <div class="table-responsive">
            <div class="col-md-12">
            <div class="widget">
              <div class="widget-content">
                <div class="table-responsive">
                  <table data-sortable="" class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th data-sorted="false">Nombre completo</th>
                        <th  data-sortable="false" data-sorted="false">¿Asistió a clases?</th>  
                      </tr>
                    </thead>
                    
                    <tbody>
                      <tr>
                        <td><strong>John Doe</strong></td>
                        <td>
                          <div class="icheckbox_square-aero" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="rows-check" style=""><ins class="iCheck-helper" style=""></ins></div>
                        </td>
                        
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('layouts.footer')
@endsection
@section ('javascript')
  <!-- Page Specific JS Libraries 
  <script src="../assets/jquery-datatables/js/jquery.dataTables.min.js"></script>
  <script src="../assets/jquery-datatables/js/dataTables.bootstrap.js"></script>
  <script src="../assets/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
  <script src="../assets/jquery-datatables/js/datatables.js"></script>
  -->
@endsection