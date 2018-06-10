    <div class="sidebar-inner slimscrollleft">
        <!-- Search form -->
        <form role="search" class="navbar-form">
            <div class="form-group">
                <input type="text" placeholder="Search" class="form-control">
                <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
            </div>
        </form>
        <div class="clearfix"></div>
        <!--- Profile -->
        <div class="profile-info">
            <div class="col-xs-4">
                <a href="" class="rounded-image profile-image"><img src="{{asset('img/users/user-100.jpg')}}"></a>
            </div>
            <div class="col-xs-6">
                <div class="profile-text">{!!(Auth::user()->tipo)!!}. <b>{!!(Auth::user()->nombre)!!}</b></div>
            </div>
            <div class="clearfix"></div>
            <hr>
            <div class="col-xs-6 text-center">
                <div class="profile-text"><b>Nº12</b></div>
                <div class="profile-buttons dropdown">
                    <a href="javascript:;" title="Seleccione hijo" class="dropdown-toggle" data-toggle="dropdown"><span class="margin-r">Cambiar</span><i class="fa fa-chevron-circle-down text-blue-1"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Escuela Margarita Barrientos</a></li>
                        <li><a href="#">Escuela nº23</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 text-center" >
                <div class="profile-text">Primero B</div>
                <div class="profile-buttons dropdown">
                    <a href="javascript:;" title="Seleccione hijo" class="dropdown-toggle" data-toggle="dropdown"><span class="margin-r">Cambiar</span><i class="fa fa-chevron-circle-down text-blue-1"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Segundo C</a></li>
                        <li><a href="#">Segundo A</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--- Divider -->
        <div class="clearfix"></div>
        <hr class="divider" />
        <div class="clearfix"></div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li><a href="{!!URL::to('/personal')!!}"><i class='fa fa-pencil-square-o'></i><span>Crear Evaluaciones</span></a></li>
                <li><a href="{!!URL::to('/personal')!!}"><i class='fa fa-sort-numeric-desc'></i><span>Cargar calificaciones</span></a></li>
                <li><a href="{!!URL::to('/personal')!!}"><i class='fa fa-book'></i><span>Temario</span></a></li>
                <li><a href="{!!URL::to('/personal/asistencia')!!}"><i class='icon-pencil-3'></i><span>Tomar asistencia</span></a>
                </li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-envelope'></i><span>Mensajes</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href="{!!URL::to('/personal/mensajes/')!!}"><span>Bandeja de entrada</span></a></li>
                        <li><a href="{!!URL::to('/personal/mensajes/crear')!!}"><span>Nuevo mensaje</span></a></li>
                        <li><a href="{!!URL::to('/personal/mensajes/')!!}"><span>Borradores</span></a></li>
                        <li><a href="{!!URL::to('/personal/mensajes/')!!}"><span>Bandeja de salida</span></a></li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>