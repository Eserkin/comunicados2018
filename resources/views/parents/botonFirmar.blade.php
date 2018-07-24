<!-- Contenido del Modal  -->
<div class="md-modal md-fade-in-scale-up" id="md-fade-in-scale-up">
  <div class="md-content" style="overflow: hidden; padding: 40px;">
    <h3 style="padding-bottom:0px;">¿Esta seguro que deséa firmar el mensaje?</h3>
    <p style=" padding-top: 0px;margin-bottom:20px; text-align:center;">Ingrese las coordenadas de su trajeta</p>

    <form id="formCoordenadas" action="/validarFirma" method="POST">
      <input type="hidden" id="current_msj_id" name="current_msj_id" value="">
      <div class="form-group">
        <label id="Coord1" class="col-sm-2 control-label" style="text-align: right;">
        @php
        echo chr(rand(ord("a"), ord("g")));echo rand(1, 5);
        @endphp
        </label>
        <input type="hidden" id="lblCoord1" name="lblCoord1" value="">

        <div class="col-sm-4">
          <input type="text" id="val1" name="val1" class="form-control">
        </div>
        

        <label id="Coord2" class="col-sm-2 control-label" style="text-align: right;">
        @php
        echo chr(rand(ord("a"), ord("g")));echo rand(1, 5);
        @endphp
        </label>
        <input type="hidden" id="lblCoord2" name="lblCoord2" value="">

        <div class="col-sm-4">
          <input type="text" id="val2" name="val2" class="form-control">
        </div>
      </div>

      
      <div class="form-group" style="margin-top:20px; position:relative;top:20px; text-align:center">
        <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
        <a class="btn btn-danger md-close">Cerrar</a>
        <button type="submit" id="btnEnviar" class="btn btn-success btn-enviar " onclick="FunctionFirmar(event)" >Firmar Mensaje</button>
      </div>

    </form>

    <div id="msgSuccess" class=" alert alert-success alert-dismissable " style="display:none;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong>El Mensaje fue firmado</strong>
    </div>

    <div id="msgFail" class=" alert alert-danger alert-dismissable " style="display:none;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong>Coordenadas incorrectas. El mensaje no se pudo firmar</strong>
    </div>

  </div>
  <!-- End div .md-content -->
</div>
<!-- End div .md-modal .md-fade-in-scale-up -->
<div class="md-overlay"></div>



<script type="text-javascript">
  $(document).ready(function() {
    $.ajaxSetup({
            headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
        });

  });

</script>