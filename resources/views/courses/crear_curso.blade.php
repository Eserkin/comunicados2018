@extends('layouts.general')

@section('title','Comunicados- Acceso Administrador')


@section ('styles')

@endsection


@section ('sidebar')
	@include('admins.admin_sidebar')
@endsection

@section ('content')

<div class="page-heading">
  <h1><i class='fa fa-envelope'></i>Crear Curso </h1>
</div>
<!-- Page Heading End-->
<!-- Your awesome content goes here -->
<div class="row">
  <div class="col-md-12">
    <div class="widget">
      <div class="widget-header">
        <h2><strong>Ingrese los datos</strong></h2>
        <div class="additional-btn">
          <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
        </div>
      </div>
      <div class="widget-content">
        <br>
        <div class="table-responsive">
          <form class='form-horizontal' role="form" action="/admin/crear_curso" method="post" >
            <table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <tbody  class="col-md-6">
                <tr>
                  <td  class="col-md-6">Seleccione el año </td>
                  <td class="col-md-6">
                    <select class="form-control input-invis" style="font-size:20px;"  id="grado" name="grado">
                     <option value="0">seleccione</option>
                     <option value="1">Guarderia</option>
                     <option value="2">Sala de 3 años</option>
                     <option value="3">Jardin</option>
                     <option value="4">Preescolar</option>
                     <option value="5">Primer año - primaria</option>
                     <option value="6">Segundo año - primaria</option>
                     <option value="7">Tercer año - primaria</option>
                     <option value="8">Cuarto año - primaria</option>
                     <option value="9">Quinto año - primaria</option>
                     <option value="10">Sexto año - primaria</option>
                     <option value="11">Primer año - secundaria</option>
                     <option value="12">Segundo año - secundaria</option>
                     <option value="13">Tercer año - secundaria</option>
                     <option value="14">Cuarto año - secundaria</option>
                     <option value="15">Quinto año - secundaria</option>
                     <option value="16">Sexto año - secundaria</option>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td  class="col-md-6">Seleccione el turno </td>
                  <td class="col-md-6">
                    <select class="form-control input-invis" style="font-size:20px;"  id="turno" name="turno">
                     <option value="0">seleccione</option>
                     <option value="1">Mañana</option>
                     <option value="2">Tarde</option>
                     <option value="3">Noche</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td  class="col-md-6">Aula: </td>
                  <td class="col-md-6"><input type="text" name="aula"></td>
                </tr>
              <tr>
              </tbody>
            </table>
          </div>
           <div class="col-md-12">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <button type="submit" class="btn btn-lg btn-success"><i class="icon-paper-plane-1"></i> Guardar cambios</button>
           </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>






	@include('layouts.footer')
@endsection


@section ('javascript')

@endsection
