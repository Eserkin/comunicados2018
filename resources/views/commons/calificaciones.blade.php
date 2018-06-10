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
    <h1>EVALUACIONES</h1>
  </div>
    
    <br>
    <select class="form-control" name="seleccionarAlumno" id="seleccionarAlumno">
    <option value="0">Seleccione el alumno</option>
          <option value="20456732">Jaimito</option>
          <option value="32267202">Benedict</option>
    </select>
    <br><br>
    <ul id="demo1" class="nav nav-tabs">
        <li class="active">
            <a href="#matematica" data-toggle="tab" aria-expanded="true">Matemática</a>
        </li>
        <li class="">
            <a href="#filosofia" data-toggle="tab" aria-expanded="false">Filosofía</a>
        </li>
        <li class="">
            <a href="#lengua" data-toggle="tab" aria-expanded="false">Lengua y Literatura</a>
        </li>
        <li class="">
            <a href="#informatica" data-toggle="tab" aria-expanded="false">Informática</a>
        </li>
        <!-- / .dropdown -->
    </ul>

    <div class="tab-content">
        <div class="tab-pane fade active in" id="matematica">
            <br>
            <div class="text-center"><h3>Primer Periodo</h3></div><br>
            <div class="table-responsive">
                  <table data-sortable="" class="table" data-sortable-initialized="true">
                    <thead>
                      <tr>
                        <th>Fecha</th>
                        <th>Temas</th>
                        <th>Calificación</th>
                        <th>Estado</th>
                        <th>Firma del Tutor</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            02-03-2018
                        </td>
                        <td>Angulos, Vectores</td>
                        <td>7 (siete)</td>
                        <td>
                          <span class="label label-success">Aprobado</span>
                        </td>
                        <td>
                          <span class="label label-success">Firmado</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          20-04-2018
                        </td>
                        <td>Matrices</td>
                        <td>6 (seis)</td>
                        <td>
                          <span class="label label-danger">Desaprobado</span>
                        </td>
                        <td>
                          <span class="label label-success">Firmado</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          13-05-2018
                        </td>
                        <td>Figuras geométricas</td>
                        <td>10 (diez)</td>
                        <td>
                          <span class="label label-success">Aprobado</span>
                        </td>
                        <td>
                          <button data-modal="md-fade-in-scale-up" class="btn btn-warning btn-sm md-trigger">Firma Pendiente</button>
                        </td>
                      </tr>
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
                        <th>Temas</th>
                        <th>Calificación</th>
                        <th>Estado</th>
                        <th>Firma del Tutor</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            02-03-2018
                        </td>
                        <td>Angulos, Vectores</td>
                        <td>7 (siete)</td>
                        <td>
                          <span class="label label-success">Aprobado</span>
                        </td>
                        <td>
                          <span class="label label-success">Firmado</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          20-04-2018
                        </td>
                        <td>Matrices</td>
                        <td>6 (seis)</td>
                        <td>
                          <span class="label label-danger">Desaprobado</span>
                        </td>
                        <td>
                          <span class="label label-success">Firmado</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          13-05-2018
                        </td>
                        <td>Figuras geométricas</td>
                        <td>10 (diez)</td>
                        <td>
                          <span class="label label-success">Aprobado</span>
                        </td>
                        <td>
                          <button data-modal="md-fade-in-scale-up" class="btn btn-warning btn-sm md-trigger">Firma Pendiente</button>
                        </td>
                      </tr>
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
                        <th>Temas</th>
                        <th>Calificación</th>
                        <th>Estado</th>
                        <th>Firma del Tutor</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            02-03-2018
                        </td>
                        <td>Angulos, Vectores</td>
                        <td>7 (siete)</td>
                        <td>
                          <span class="label label-success">Aprobado</span>
                        </td>
                        <td>
                          <span class="label label-success">Firmado</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          20-04-2018
                        </td>
                        <td>Matrices</td>
                        <td>6 (seis)</td>
                        <td>
                          <span class="label label-danger">Desaprobado</span>
                        </td>
                        <td>
                          <span class="label label-success">Firmado</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          13-05-2018
                        </td>
                        <td>Figuras geométricas</td>
                        <td>10 (diez)</td>
                        <td>
                          <span class="label label-success">Aprobado</span>
                        </td>
                        <td>
                          <button data-modal="md-fade-in-scale-up" class="btn btn-warning btn-sm md-trigger">Firma Pendiente</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
        <!-- / .tab-pane -->
        <div class="tab-pane fade " id="filosofia">
            <br>
            <div class="text-center"><h3>Primer Periodo</h3></div><br>
            <div class="table-responsive">
                  <table data-sortable="" class="table" data-sortable-initialized="true">
                    <thead>
                      <tr>
                        <th>Fecha</th>
                        <th>Temas</th>
                        <th>Calificación</th>
                        <th>Estado</th>
                        <th>Firma del Tutor</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            02-03-2018
                        </td>
                        <td>Angulos, Vectores</td>
                        <td>7 (siete)</td>
                        <td>
                          <span class="label label-success">Aprobado</span>
                        </td>
                        <td>
                          <span class="label label-success">Firmado</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          20-04-2018
                        </td>
                        <td>Matrices</td>
                        <td>6 (seis)</td>
                        <td>
                          <span class="label label-danger">Desaprobado</span>
                        </td>
                        <td>
                          <span class="label label-success">Firmado</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          13-05-2018
                        </td>
                        <td>Figuras geométricas</td>
                        <td>10 (diez)</td>
                        <td>
                          <span class="label label-success">Aprobado</span>
                        </td>
                        <td>
                          <button data-modal="md-fade-in-scale-up" class="btn btn-warning btn-sm md-trigger">Firma Pendiente</button>
                        </td>
                      </tr>
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
                        <th>Temas</th>
                        <th>Calificación</th>
                        <th>Estado</th>
                        <th>Firma del Tutor</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            02-03-2018
                        </td>
                        <td>Angulos, Vectores</td>
                        <td>7 (siete)</td>
                        <td>
                          <span class="label label-success">Aprobado</span>
                        </td>
                        <td>
                          <span class="label label-success">Firmado</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          20-04-2018
                        </td>
                        <td>Matrices</td>
                        <td>6 (seis)</td>
                        <td>
                          <span class="label label-danger">Desaprobado</span>
                        </td>
                        <td>
                          <span class="label label-success">Firmado</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          13-05-2018
                        </td>
                        <td>Figuras geométricas</td>
                        <td>10 (diez)</td>
                        <td>
                          <span class="label label-success">Aprobado</span>
                        </td>
                        <td>
                          <button data-modal="md-fade-in-scale-up" class="btn btn-warning btn-sm md-trigger">Firma Pendiente</button>
                        </td>
                      </tr>
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
                        <th>Temas</th>
                        <th>Calificación</th>
                        <th>Estado</th>
                        <th>Firma del Tutor</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            02-03-2018
                        </td>
                        <td>Angulos, Vectores</td>
                        <td>7 (siete)</td>
                        <td>
                          <span class="label label-success">Aprobado</span>
                        </td>
                        <td>
                          <span class="label label-success">Firmado</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          20-04-2018
                        </td>
                        <td>Matrices</td>
                        <td>6 (seis)</td>
                        <td>
                          <span class="label label-danger">Desaprobado</span>
                        </td>
                        <td>
                          <span class="label label-success">Firmado</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          13-05-2018
                        </td>
                        <td>Figuras geométricas</td>
                        <td>10 (diez)</td>
                        <td>
                          <span class="label label-success">Aprobado</span>
                        </td>
                        <td>
                          <button data-modal="md-fade-in-scale-up" class="btn btn-warning btn-sm md-trigger">Firma Pendiente</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
        <!-- / .tab-pane -->
        <div class="tab-pane fade" id="lengua">
            <br>
            <div class="text-center"><h3>Primer Periodo</h3></div><br>
            <div class="table-responsive">
                  <table data-sortable="" class="table" data-sortable-initialized="true">
                    <thead>
                      <tr>
                        <th>Fecha</th>
                        <th>Temas</th>
                        <th>Calificación</th>
                        <th>Estado</th>
                        <th>Firma del Tutor</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            02-03-2018
                        </td>
                        <td>Angulos, Vectores</td>
                        <td>7 (siete)</td>
                        <td>
                          <span class="label label-success">Aprobado</span>
                        </td>
                        <td>
                          <span class="label label-success">Firmado</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          20-04-2018
                        </td>
                        <td>Matrices</td>
                        <td>6 (seis)</td>
                        <td>
                          <span class="label label-danger">Desaprobado</span>
                        </td>
                        <td>
                          <span class="label label-success">Firmado</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          13-05-2018
                        </td>
                        <td>Figuras geométricas</td>
                        <td>10 (diez)</td>
                        <td>
                          <span class="label label-success">Aprobado</span>
                        </td>
                        <td>
                          <button data-modal="md-fade-in-scale-up" class="btn btn-warning btn-sm md-trigger">Firma Pendiente</button>
                        </td>
                      </tr>
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
                        <th>Temas</th>
                        <th>Calificación</th>
                        <th>Estado</th>
                        <th>Firma del Tutor</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            02-03-2018
                        </td>
                        <td>Angulos, Vectores</td>
                        <td>7 (siete)</td>
                        <td>
                          <span class="label label-success">Aprobado</span>
                        </td>
                        <td>
                          <span class="label label-success">Firmado</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          20-04-2018
                        </td>
                        <td>Matrices</td>
                        <td>6 (seis)</td>
                        <td>
                          <span class="label label-danger">Desaprobado</span>
                        </td>
                        <td>
                          <span class="label label-success">Firmado</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          13-05-2018
                        </td>
                        <td>Figuras geométricas</td>
                        <td>10 (diez)</td>
                        <td>
                          <span class="label label-success">Aprobado</span>
                        </td>
                        <td>
                          <button data-modal="md-fade-in-scale-up" class="btn btn-warning btn-sm md-trigger">Firma Pendiente</button>
                        </td>
                      </tr>
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
                        <th>Temas</th>
                        <th>Calificación</th>
                        <th>Estado</th>
                        <th>Firma del Tutor</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            02-03-2018
                        </td>
                        <td>Angulos, Vectores</td>
                        <td>7 (siete)</td>
                        <td>
                          <span class="label label-success">Aprobado</span>
                        </td>
                        <td>
                          <span class="label label-success">Firmado</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          20-04-2018
                        </td>
                        <td>Matrices</td>
                        <td>6 (seis)</td>
                        <td>
                          <span class="label label-danger">Desaprobado</span>
                        </td>
                        <td>
                          <span class="label label-success">Firmado</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          13-05-2018
                        </td>
                        <td>Figuras geométricas</td>
                        <td>10 (diez)</td>
                        <td>
                          <span class="label label-success">Aprobado</span>
                        </td>
                        <td>
                          <button data-modal="md-fade-in-scale-up" class="btn btn-warning btn-sm md-trigger">Firma Pendiente</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
        <!-- / .tab-pane -->
        <div class="tab-pane fade" id="informatica">
            <br>
            <div class="text-center"><h3>Primer Periodo</h3></div><br>
            <div class="table-responsive">
                  <table data-sortable="" class="table" data-sortable-initialized="true">
                    <thead>
                      <tr>
                        <th>Fecha</th>
                        <th>Temas</th>
                        <th>Calificación</th>
                        <th>Estado</th>
                        <th>Firma del Tutor</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            02-03-2018
                        </td>
                        <td>Angulos, Vectores</td>
                        <td>7 (siete)</td>
                        <td>
                          <span class="label label-success">Aprobado</span>
                        </td>
                        <td>
                          <span class="label label-success">Firmado</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          20-04-2018
                        </td>
                        <td>Matrices</td>
                        <td>6 (seis)</td>
                        <td>
                          <span class="label label-danger">Desaprobado</span>
                        </td>
                        <td>
                          <span class="label label-success">Firmado</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          13-05-2018
                        </td>
                        <td>Figuras geométricas</td>
                        <td>10 (diez)</td>
                        <td>
                          <span class="label label-success">Aprobado</span>
                        </td>
                        <td>
                          <button data-modal="md-fade-in-scale-up" class="btn btn-warning btn-sm md-trigger">Firma Pendiente</button>
                        </td>
                      </tr>
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
                        <th>Temas</th>
                        <th>Calificación</th>
                        <th>Estado</th>
                        <th>Firma del Tutor</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            02-03-2018
                        </td>
                        <td>Angulos, Vectores</td>
                        <td>7 (siete)</td>
                        <td>
                          <span class="label label-success">Aprobado</span>
                        </td>
                        <td>
                          <span class="label label-success">Firmado</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          20-04-2018
                        </td>
                        <td>Matrices</td>
                        <td>6 (seis)</td>
                        <td>
                          <span class="label label-danger">Desaprobado</span>
                        </td>
                        <td>
                          <span class="label label-success">Firmado</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          13-05-2018
                        </td>
                        <td>Figuras geométricas</td>
                        <td>10 (diez)</td>
                        <td>
                          <span class="label label-success">Aprobado</span>
                        </td>
                        <td>
                          <button data-modal="md-fade-in-scale-up" class="btn btn-warning btn-sm md-trigger">Firma Pendiente</button>
                        </td>
                      </tr>
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
                        <th>Temas</th>
                        <th>Calificación</th>
                        <th>Estado</th>
                        <th>Firma del Tutor</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            02-03-2018
                        </td>
                        <td>Angulos, Vectores</td>
                        <td>7 (siete)</td>
                        <td>
                          <span class="label label-success">Aprobado</span>
                        </td>
                        <td>
                          <span class="label label-success">Firmado</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          20-04-2018
                        </td>
                        <td>Matrices</td>
                        <td>6 (seis)</td>
                        <td>
                          <span class="label label-danger">Desaprobado</span>
                        </td>
                        <td>
                          <span class="label label-success">Firmado</span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          13-05-2018
                        </td>
                        <td>Figuras geométricas</td>
                        <td>10 (diez)</td>
                        <td>
                          <span class="label label-success">Aprobado</span>
                        </td>
                        <td>
                          <button data-modal="md-fade-in-scale-up" class="btn btn-warning btn-sm md-trigger">Firma Pendiente</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
        <!-- / .tab-pane -->
    </div>
    <!-- / .tab-content -->

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