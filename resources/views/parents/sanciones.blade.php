@extends('layouts.general')
@section('title','Comunicados- Menciones y sanciones por buen comportamiento')
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
    <h1>Sanciones por mal comportamiento</h1>
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
    @if(count($sanciones)>=1)
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
              @foreach($sanciones as $sancion)
              <tr class="fila" data-type="{{$sancion->recibe_dni}}">
                <td>{{$sancion->created_at}}</td>
                <td>{{$sancion->mensaje}}</td>
                <td>{{$sancion->nombre}},{{$sancion->apellido}}</td>
                <td>{{$sancion->recibe_dni}}</td>
                @if((Auth::user()->tipo)=="tutor")
                <td>
                  @if(($sancion->fue_firmado)==1)
                  <span class="label label-success">Firmado</span>
                  @elseif(($sancion->fue_firmado)==0)
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
    <h4>No se encontraron sanciones hasta la fecha</h4>
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