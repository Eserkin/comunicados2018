@extends('layouts.general')
@section('title','Comunicados- Menciones y Distinciones por buen comportamiento')
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

  <div class="page-heading">
    <h1>Menciones y distinciones al mérito</h1>
  </div>

@if(count($hijos)>1)
<label for="email">Filtar por alumno:</label>
  <select class="form-control" name="seleccionarAlumno" id="seleccionarAlumno">
    <option value="all">Todos los alumnos</option>
    @foreach($hijos as $hijo)
      <option value="{{$hijo->alumno_id}}">{{$hijo->nombre}}</option>
    @endforeach
  </select>
@endif

<br><br>


<div class="row">
  <div class="col-md-12">
    <div>
      
    </div>
    @if(count($distinciones)>=1)
    <div class="widget">
      <div class="widget-content">
        <div class="table-responsive">

          <table data-sortable="" class="table" data-sortable-initialized="true">
            <thead>
              <tr>
                <th>Fecha</th>
                <th>Motivo</th>
                <th>Registrada por.</th>
                @if((Auth::user()->tipo)=="tutor")
                <th>Alumno</th>
                <th>Firma del tutor</th>
                @endif
              </tr>
            </thead>
            <tbody>
              @foreach($distinciones as $distincion)
              <tr class="fila" data-type="{{$distincion->recibe_dni}}">
                <td>{{$distincion->created_at}}</td>
                <td>{{$distincion->mensaje}}</td>
                <td>{{$distincion->nombre}},{{$distincion->apellido}}</td>
                <td>{{$distincion->recibe_dni}}</td>
                @if((Auth::user()->tipo)=="tutor")
                <td>
                  @if(($distincion->fue_firmado)==1)
                  <span class="label label-success">Firmado</span>
                  @elseif(($distincion->fue_firmado)==0)
                  <span class="label label-warning">Por firmar</span>
                  @endif
                </td>
                @endif
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    @else
    <h4>No se encontraron Distinciones hasta la fecha</h4>
    @endif
  </div>
</div>

@endsection

@section ('javascript')
  <script>

    $("#seleccionarAlumno").change(function() {
    var filterValue = $(this).val();
    var fila = $('.fila'); 
      
    fila.hide()
    fila.each(function(i, el) {
         if($(el).attr('data-type') == filterValue) {
             $(el).show();
         }
    })

    if ("all" == filterValue) {
        fila.show();
      }
     
});
  </script>
@endsection