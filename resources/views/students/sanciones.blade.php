@extends('layouts.general')
@section('title','Comunicados- Sanciones por mal comportamiento')
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

<div class="row">
  <div class="col-md-12">
    @if(count($sanciones)>=1)
    <div class="widget">
      <div class="widget-content">
        <div class="table-responsive">
          <table class="table" data-sortable-initialized="true">
            <thead>
              <tr>
                <th>Fecha</th>
                <th>Motivo</th>
                <th>Registrada por.</th>
                @if((Auth::user()->tipo)=="tutor")
                <th>Firma del tutor</th>
                @endif
              </tr>
            </thead>
            <tbody>
              @foreach($sanciones as $sancion)
              <tr>
                <td>{{$sancion->created_at}}</td>
                <td>{{$sancion->mensaje}}</td>
                <td>{{$sancion->nombre}},{{$sancion->apellido}}</td>
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
    <h4>No se encontraron Sanciones hasta la fecha</h4>
    @endif
  </div>
</div>
@endsection
@section ('javascript')
@endsection