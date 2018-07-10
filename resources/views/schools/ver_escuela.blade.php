@extends('layouts.general')

@section('title','Comunicados - Ver Escuela')


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

  <div id="msgSuccess" class=" alert alert-success alert-dismissable " style="display:none;">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <strong>Usuario actualizado correctamente</strong>
  </div>

	            <!-- Page Heading Start -->
                <div class="page-heading">
                    <h1><i class='fa fa-bell-o'> </i>&nbsp;&nbsp;Datos de la Escuela</h1>
                </div>
                <!-- Page Heading End-->
                <form class="form-horizontal" role="form" action="/admin/escuelas/" method="POST" name="form1" id"form1">

                  <input type="hidden" id="escuelaId" name="escuelaId" value="{{ $school->id}}">

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="numero">NÚMERO:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="numero" name="numero" value="{{ $school->numero}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="nombre">NOMBRE:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $school->nombre}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="nivel">NIVEL:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nivel" name="nivel" value="{{ $school->nivel}}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="modalidad">MODALIDAD:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="modalidad" name="modalidad" value="{{ $school->modalidad}}">
                    </div>
                  </div>
				          <div class="form-group">
                    <label class="control-label col-sm-2" for="provincia">PROVINCIA:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="provincia" name="provincia" value="{{ $school->provincia}}">
                    </div>
                  </div>
				          <div class="form-group">
                    <label class="control-label col-sm-2" for="direccion">DIRECCIÓN:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $school->direccion}}">
                    </div>
                  </div>
				          <div class="form-group">
                    <label class="control-label col-sm-2" for="localidad">LOCALIDAD:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="localidad" name="localidad" value="{{ $school->localidad}}">
                    </div>
                  </div>
				          <div class="form-group">
                    <label class="control-label col-sm-2" for="telefono">TELÉFONO:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $school->telefono}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="fax">FAX:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="fax" name="fax" value="{{ $school->fax}}">
                    </div>
                  </div>
				          <div class="form-group">
                    <label class="control-label col-sm-2" for="email">E-MAIL:</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" name="email" value="{{ $school->email}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="pagina_web">PÁGINA WEB:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="pagina_web" name="pagina_web" value="{{ $school->pagina_web}}">
                    </div>
                  </div>



                  <br>
                 <div class="col-sm-2">
                 </div> 
                 <div class="col-sm-10">
                     <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">

                     <button type="submit" class="btn btn-lg btn-success" id="btnEnviar"><i class="icon-paper-plane-1"></i> Actualizar Datos</button>
                 </div>				  
				          <br><br>
                </form>
                
                @include('layouts.footer')
@endsection


@section ('javascript')
<script type="text/javascript">
  $(document).ready(function() {
    $.ajaxSetup({
            headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
        });

  });



  $("#btnEnviar").click(function (e){
    e.preventDefault();

    var url="/admin/escuelas/";
    var data= $('form').serialize();
    $.post(url,data,function(){$('#msgSuccess').fadeIn();})


  });
</script>



@endsection