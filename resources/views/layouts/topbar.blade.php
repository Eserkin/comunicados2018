<!-- Top Bar Start -->
<div class="topbar">
    <div class="topbar-left">
        <div class="logo">
            <h1><img src="{{asset('img/logo.png')}}" alt="Logo"></h1>
        </div>
        <button class="button-menu-mobile open-left">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-collapse2">
                <!--<ul class="nav navbar-nav hidden-xs">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th"></i></a>
                        <div class="dropdown-menu grid-dropdown">
                            <div class="row stacked">
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="notes-app" data-status="active"><i class="icon-edit"></i>Notas</a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="todo-app" data-status="active"><i class="icon-check"></i>Tareas</a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="calc" data-status="inactive"><i class="fa fa-calculator"></i>Calculadora</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </li>
                </ul>-->
                <ul class="nav navbar-nav navbar-right top-navbar">
                    <li class="dropdown iconify hide-phone"><a href="#" onclick="javascript:toggle_fullscreen()"><i class="icon-resize-full-2"></i></a></li>
                    <li class="dropdown topbar-profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="rounded-image topbar-profile-image"><img src="{{asset('img/users/user-35.jpg')}}"></span> 
                            <strong>{{ Auth::user()->nombre }}</strong> <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{!!URL::to('/perfil')!!}">Mi perfil</a></li>
                            <li><a href="#">Cambiar Password</a></li>
                            <li><a href="{!!URL::to('/configuracion')!!}">Configuración</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-help-2"></i> Ayuda</a></li>
                            <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="icon-logout-1"></i> Cerrar Sesión
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<!-- Top Bar End -->