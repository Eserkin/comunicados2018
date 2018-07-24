@extends('layouts.general') 

@section('title','Comunicados- Acceso Estudiantes') 

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
    <h1>Calificaciones</h1>
  </div>
    
    <br>
    <ul id="demo2" class="nav nav-tabs">
    @foreach($materias as $materia)   
        <li @if ($loop->first) class="active" @else class="" @endif >
            <a href="#{{$materia->titulo}}" data-toggle="tab" @if ($loop->first) aria-expanded="true" @else aria-expanded="false" @endif 
              >{{$materia->titulo}}</a>
        </li>
           
    @endforeach
    </ul>

    <div class="tab-content">
    @foreach($materias as $materia) 
      <div @if ($loop->first) class="tab-pane fade active in" @else class="tab-pane fade" @endif  id="{{$materia->titulo}}">
            <br>
            <div class="text-center"><h3>Primer Periodo</h3></div><br>
            <div class="table-responsive">
                  <table data-sortable="" class="table" data-sortable-initialized="true">
                    <thead>
                      <tr>
                        <th>Fecha</th>
                        <th>Materia</th>
                        <th>Temas</th>
                        <th>Calificación</th>
                        <th>Estado</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($primerPeriodo as $primer)
                      @if(($primer->materia)===($materia->titulo))
                      <tr>
                        <td>{{$primer->fecha}}</td>
                        <td>{{$primer->materia}}</td>
                        <td>{{$primer->temas}}</td>
                        <td>{{$primer->calificacion}}</td>
                        <td>
                          @if(($primer->estado_aprobacion)== 0)
                          <span class="label label-danger">Desaprobado</span>
                          @else
                          <span class="label label-success">Aprobado</span>
                          @endif
                        </td>                       
                      </tr>
                      @endif
                      @endforeach
                    </tbody>
                  </table>
            </div>
            <br><br>
            <div class="text-center"><h3>Segundo Periodo</h3></div><br>
            <div class="table-responsive">
                  <table data-sortable="" class="table" data-sortable-initialized="true">
                    <thead>
                      <tr>
                        <th>Fecha</th>
                        <th>Materia</th>
                        <th>Temas</th>
                        <th>Calificación</th>
                        <th>Estado</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($segundoPeriodo as $segundo)
                      @if(($segundo->materia)===($materia->titulo))
                      <tr>
                        <td>{{$segundo->fecha}}</td>
                        <td>{{$segundo->materia}}</td>
                        <td>{{$segundo->temas}}</td>
                        <td>{{$segundo->calificacion}}</td>
                        <td>
                          @if(($segundo->estado_aprobacion)== 0)
                          <span class="label label-danger">Desaprobado</span>
                          @else
                          <span class="label label-success">Aprobado</span>
                          @endif
                        </td>                       
                      </tr>
                      @endif
                      @endforeach
                    </tbody>
                  </table>
            </div>
            <br><br>
            <div class="text-center"><h3>Tercer Periodo</h3></div><br>
            <div class="table-responsive">
                  <table data-sortable="" class="table" data-sortable-initialized="true">
                   <thead>
                      <tr>
                        <th>Fecha</th>
                        <th>Materia</th>
                        <th>Temas</th>
                        <th>Calificación</th>
                        <th>Estado</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($tercerPeriodo as $tercer)
                      @if(($segundo->materia)===($materia->titulo))
                      <tr>
                        <td>{{$tercer->fecha}}</td>
                        <td>{{$tercer->materia}}</td>
                        <td>{{$tercer->temas}}</td>
                        <td>{{$tercer->calificacion}}</td>
                        <td>
                          @if(($tercer->estado_aprobacion)== 0)
                          <span class="label label-danger">Desaprobado</span>
                          @else
                          <span class="label label-success">Aprobado</span>
                          @endif
                        </td>                       
                      </tr>
                      @endif
                      @endforeach
                    </tbody>
                  </table>
            </div>
      </div>
        <!-- / .tab-pane -->
      @endforeach
    </div>
    


    <!-- Contenido del Modal  -->
   

    <div class="md-modal md-fade-in-scale-up" id="md-fade-in-scale-up">
      <div class="md-content">
        <h3 style="padding-bottom:0px;">¿Esta seguro que deséa firmar el mensaje?</h3>
        <div>
          <p style=" padding-top: 0px;margin-bottom:20px; text-align:center;">Ingrese las coordenadas de su trajeta TOKEN</p>
          <div class="form-group">
            <label class="col-sm-2 control-label">
              @php
                echo chr(rand(ord("A"), ord("B")));
                echo rand(1, 9);
              @endphp  :
            </label>
            <div class="col-sm-4">
              <input type="text" class="form-control">
            </div>
            <label class="col-sm-2 control-label">
              @php
                echo chr(rand(ord("A"), ord("B")));
                echo rand(1, 9);
              @endphp  :
            </label>
            <div class="col-sm-4">
              <input type="text" class="form-control">
            </div>
          </div>

          <div class="form-group" style="margin-top:20px; position:relative;top:20px; text-align:center">
            <button class="btn btn-danger md-close">Cerrar</button>
            <button class="btn btn-success ">Firmar Mensaje</button>
          </div>
        </div>
      </div><!-- End div .md-content -->
    </div><!-- End div .md-modal .md-fade-in-scale-up -->

</div>
 
<!-- the overlay modal element -->
  <div class="md-overlay"></div>
  <!-- End of eoverlay modal -->
@include('layouts.footer') 

@endsection 


@section ('javascript') 

@endsection