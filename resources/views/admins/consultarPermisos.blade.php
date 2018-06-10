@extends('layouts.general')

@section('title','Comunicados- Acceso Administrador')


@section ('styles')
    <link href="{{asset('assets/morrischart/morris.css')}}" rel="stylesheet" type="text/css" />
    <link href="/css/estilos.css" rel="stylesheet" type="text/css" />

@endsection


@section ('sidebar')
	@include('admins.admin_sidebar')
@endsection

@section ('content')
      <h1><i class='fa fa-key'></i>Consultar permisos</h1>
        <table class="table table-hover" style="font-size:14px; border-collapse: collapse;  border: blue 3px solid;">
        <tr>
          <th style="font-size:25px; font-weight:bold;">Rol</th>
           @foreach ($permisos as $permiso)
           <th>{{$permiso->nombre}}</th>
           @endforeach
        </tr>
        @foreach ($roles as $rol)
        <tr>
           <td style="font-size:15px; font-weight:bold;">{{$rol->cargo}}</td>
           @foreach($permisos as $permiso)
           <td style="color:blue; font-size:20px; font-weight:bold; text-align:center;">
             @foreach($rp as $fila)
               @if($fila['id_rol']==$rol->id && $fila['id_permiso']==$permiso->id)
                X
               @endif
             @endforeach
           </td>
           @endforeach

        </tr>
        @endforeach
        </table>

            <!------------------------------------------------------------------------>
  @include('layouts.footer')
@endsection


@section ('javascript')
    <script src="{{asset('assets/raphael/raphael-min.js')}}"></script>
    <script src="{{asset('assets/morrischart/morris.min.js')}}"></script>
    <script src="{{asset('js/pages/morris-charts.js')}}"></script>
@endsection
