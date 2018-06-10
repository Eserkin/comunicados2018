
  <div class="list-group menu-message">
    <a href="{!!URL::to('/mensajes/crear')!!}" class="list-group-item"><i class="icon-inbox"></i> Bandeja de entrada <span class="badge pull-right">4</span></a>
{{--     @if(Auth::user()->tipo=="personal"or Auth::user()->tipo=="admin")
    <a href="#fakelink" class="list-group-item"><i class="icon-pencil"></i> Borradores <span class="badge bg-green-1 pull-right">1</span></a>
    @endif --}}
    <a href="#fakelink" class="list-group-item"><i class="icon-star"></i> Importantes <span class="badge bg-red-1 pull-right">2</span></a>
    @if(Auth::user()->tipo=="personal"or Auth::user()->tipo=="admin")
    <a href="#fakelink" class="list-group-item"><i class="icon-export"></i> Enviados</a>
    @endif
  </div>
  <div class="list-group menu-folders">
    <a href="#fakelink" class="list-group-item"><i class="fa fa-circle darkblue-2"></i> Comunicados generales</a>
    <a href="#fakelink" class="list-group-item"><i class="fa fa-circle text-blue-1"></i> Permisos</a>
    <a href="#fakelink" class="list-group-item"><i class="fa fa-circle text-yellow-1"></i> Mensajes privados</a>
    <a href="#fakelink" class="list-group-item"><i class="fa fa-circle text-lightblue-1"></i> Citatorios</a>
    <a href="#fakelink" class="list-group-item"><i class="fa fa-circle text-green-1"></i> Distinciones</a>
    <a href="#fakelink" class="list-group-item"><i class="fa fa-circle text-yellow-2"></i> Observaciones</a>
    <a href="#fakelink" class="list-group-item"><i class="fa fa-circle text-red-1"></i> Sanciones</a>
  </div>
