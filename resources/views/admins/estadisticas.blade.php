@extends('layouts.general')

@section('title','Comunicados- Acceso Administrador')


@section ('styles')
    <link href="{{asset('assets/morrischart/morris.css')}}" rel="stylesheet" type="text/css" />
@endsection


@section ('sidebar')
	@include('admins.admin_sidebar')
@endsection

@section ('content')
                <!-- Start info box -->
  <div class="col-md-12">
    <div class="col-md-4">
      <div class="widget green-1 animated fadeInDown">
        <div class="widget-content padding">
          <div class="widget-icon">
              <i class="fa fa-child"></i>
          </div>
          <div class="text-box">
            <p class="maindata">Cantidad <b>ALUMNOS</b></p>
            <h2 class="text-center"><span class="animate-number" data-value="{{$alumnos}}" data-duration="1500">{{$alumnos}}</span></h2>
            <div class="clearfix">
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="widget green-1 animated fadeInDown">
      <div class="widget-content padding">
        <div class="widget-icon">
            <i class="fa fa-child"></i>
        </div>
        <div class="text-box">
          <p class="maindata">Cantidad <b>EMPLEADOS</b></p>
          <h2 class="text-center"><span class="animate-number" data-value="{{$staff}}" data-duration="1500">{{$staff}}</span></h2>
          <div class="clearfix">
          </div>
        </div>
    </div>
  </div>
</div>
<div class="col-md-4">
  <div class="widget green-1 animated fadeInDown">
    <div class="widget-content padding">
      <div class="widget-icon">
          <i class="fa fa-child"></i>
      </div>
      <div class="text-box">
        <p class="maindata">Cantidad <b>TUTORES</b></p>
        <h2 class="text-center"><span class="animate-number" data-value="{{$tutores}}" data-duration="1500">{{$tutores}}</span></h2>
        <div class="clearfix">
        </div>
      </div>
  </div>
</div>
</div>
</div>
<!------------------------------------>
<div class="page-heading">
  <h1><i class='fa fa-envelope'></i>Establecimiento</h1>
</div>
<div class="row">

  <div class="col-md-12">
    <div class="widget">
      <div class="widget-header">
        <h2><strong>{{$school{0}->nombre}}</strong></h2>
        <div class="additional-btn">
          <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
          <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
          <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
        </div>
      </div>
      <div class="widget-content">
        <br>
        <div class="table-responsive">
          <form class='form-horizontal' role='form'>
            <table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Modalidad</th>
                  <th>Nivel</th>
                  <th>Numero</th>
                  <th>Direccion</th>
                  <th>Localidad</th>
                  <th>Provincia</th>
                  <th>Telefono</th>
                  <th>Fax</th>
                  <th>Email</th>
                  <th>Pagina Web</th>
                </tr>
              </thead>

              <tfoot>
                <tr>
                  <th>Modalidad</th>
                  <th>Nivel</th>
                  <th>Numero</th>
                  <th>Direccion</th>
                  <th>Localidad</th>
                  <th>Provincia</th>
                  <th>Telefono</th>
                  <th>Fax</th>
                  <th>Email</th>
                  <th>Pagina Web</th>
                </tr>
              </tfoot>

              <tbody>
                @foreach($school as $s)
                <tr>
                  <td>{{$s->modalidad}}</td>
                  <td>{{$s->nivel}}</td>
                  <td>{{$s->numero}}</td>
                  <td>{{$s->direccion}}</td>
                  <td>{{$s->localidad}}</td>
                  <td>{{$s->provincia}}</td>
                  <td>{{$s->telefono}}</td>
                  <td>{{$s->fax}}</td>
                  <td>{{$s->email}}</td>
                  <td>{{$s->web}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Page Heading End-->
<!-- Your awesome content goes here -->



                @include('layouts.footer')
@endsection


@section ('javascript')
    <script src="{{asset('assets/raphael/raphael-min.js')}}"></script>
    <script src="{{asset('assets/morrischart/morris.min.js')}}"></script>
    <script src="{{asset('js/pages/morris-charts.js')}}"></script>
@endsection
