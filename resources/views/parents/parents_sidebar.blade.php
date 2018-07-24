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
                <a href="" class="rounded-image profile-image"><img src="{{URL::asset(Auth::user()->foto_url)}}"></a>
            </div>
            <div class="col-xs-8">
                <div class="profile-text">{!!(Auth::user()->nombre)!!} <b>{!!(Auth::user()->apellido)!!}</b><br/>{!!(Auth::user()->tipo)!!}</div>
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
            

                <li><a href="{!!URL::to('/tutor/calificaciones')!!}"><i class='fa fa-pencil-square-o'></i><span>Calificaciones</span></a></li>

                <li><a href="{!!URL::to('/tutor/mensajes/')!!}"><i class='fa fa-envelope'></i><span>Bandeja de entrada</span></a></li>


                <li><a href="{!!URL::to('/tutor/noFirmados')!!}"><i class='icon-pencil-3'></i><span>Mensajes a firmar</span></a></li>
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
