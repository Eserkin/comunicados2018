    <div class="sidebar-inner slimscrollleft">
        <!-- Search form -->

        {{--
        <form role="search" class="navbar-form">
            <div class="form-group">
                <input type="text" placeholder="Search" class="form-control">
                <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
            </div>
        </form>
        --}}
        <!--- Divider -->
        <div class="clearfix"></div>
        <hr class="divider" />
        <div class="clearfix"></div>
        <!--- Profile -->
        <div class="profile-info">
            <div class="col-xs-4">
                <a href="" class="rounded-image profile-image"><img src="{{asset('img/users/user-100.jpg')}}"></a>
            </div>
            <div class="col-xs-8">
                <div class="profile-text">{!!(Auth::user()->nombre)!!} <b>{!!(Auth::user()->apellido)!!}</b></div>
{{--                 
                <div class="profile-buttons dropdown">
                    <a href="javascript:;" title="Seleccione hijo" class="dropdown-toggle" data-toggle="dropdown"><span class="margin-r">Seleccionar alumno</span><i class="fa fa-chevron-circle-down text-blue-1"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Alumno 1</a></li>
                        <li><a href="#">Alumno 2</a></li>
                        <li><a href="#">Alumno 3</a></li>
                    </ul>
                </div> 
--}}
            </div>
        </div>
        <!--- Divider -->
        <div class="clearfix"></div>
        <hr class="divider" />
        <div class="clearfix"></div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li><a href="{!!URL::to('/tutor')!!}"><i class='icon-home-3'></i><span>Home</span></a></li>
                <li><a href="{!!URL::to('/tutor/asistencias')!!}"><i class='glyphicon glyphicon-check'></i><span>Asistencias</span></a></li>
                
                {{-- 

                <li class='has_sub'><a href='javascript:void(0);'><i class='glyphicon glyphicon-check'></i><span>Asistencias</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href="{!!URL::to('/tutor/asistencias')!!}"><span>Ver asistencias</span></a></li>
                        
                        <li><a href="{!!URL::to('/tutor/justificativo')!!}"><span>Subir Justificativo</span></a></li> 
                        
                    </ul>
                </li>

                --}}

                <li><a href="{!!URL::to('/tutor/calificaciones')!!}"><i class='fa fa-pencil-square-o'></i><span>Calificaciones</span></a></li>
                {{-- 

                <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-pencil-square-o'></i><span>Calificaciones</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href="{!!URL::to('/tutor/calificaciones/mat1')!!}"><span>Matemática 1</span></a></li>
                        <li><a href='/tutor/calificaciones/lenguaylit'><span>Lengua y literatura</span></a></li>
                        <li><a href='/tutor/calificaciones/cssociales2'><span>Ciencias Sociales 2</span></a></li>
                        <li><a href='/tutor/calificaciones/culturayartecont'><span>Cultura y Arte contemporánea</span></a></li>
                    </ul>
                </li> 

                --}}

                {{-- 
                <li><a href="{!!URL::to('/tutor/calendario')!!}"><i class='fa fa-table'></i><span>Calendario Escolar</span></a></li> 
                --}}
                <li><a href="{!!URL::to('/tutor/mensajes/')!!}"><i class='fa fa-envelope'></i><span>Bandeja de entrada</span></a></li>

               {{--  
               <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-envelope'></i><span>Mensajes</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href="{!!URL::to('/tutor/mensajes/')!!}"><span>Bandeja de entrada</span></a></li>
                        <li><a href="{!!URL::to('/tutor/mensajes/crear')!!}"><span>Nuevo mensaje</span></a></li>
                        <li><a href="{!!URL::to('/tutor/mensajes/')!!}"><span>Borradores</span></a></li>
                        <li><a href="{!!URL::to('/tutor/mensajes/')!!}"><span>Bandeja de salida</span></a></li>
                    </ul>
                </li> 
                --}}
                <li><a href="{!!URL::to('/tutor/firmar')!!}"><i class='icon-pencil-3'></i><span>Mensajes a firmar</span></a></li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='icon-chart-line'></i><span>Comportamiento</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href="{!!URL::to('/tutor/comportamiento/distinciones')!!}"><span>Distinciones</span></a></li>
                        <li><a href="{!!URL::to('/tutor/comportamiento/observaciones')!!}"><span>Observaciones</span></a></li>
                        <li><a href="{!!URL::to('/tutor/comportamiento/sanciones/')!!}"><span>Sanciones</span></a></li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
