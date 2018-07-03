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
        <div class="clearfix"></div>
        <hr class="divider" />
        <div class="clearfix"></div>
        <!--- Profile -->
        <div class="profile-info">
            <div class="col-xs-4">
                <a href="" class="rounded-image profile-image"><img src="{{asset('img/users/user-100.jpg')}}"></a>
            </div>
            <div class="col-xs-8">
                <?php   $school =DB::table('users')
                          ->join('security_admins', 'security_admins.dni', '=', 'users.dni')
                          ->join('schools', 'schools.id', '=', 'security_admins.escuela_id')
                          ->select('schools.modalidad as modalidad','schools.nivel as nivel','schools.numero as numero','schools.nombre as nombre')
                          ->where('security_admins.dni',Auth::user()->dni)
                          ->get();
                  ?>
                <div class="profile-text">{!!(Auth::user()->tipo)!!}. <b>{!!(Auth::user()->nombre)!!}</b> </div>
                <div class="profile-button">{{$school{0}->nombre}}</b></div>
            </div>
        </div>
        <!--- Divider -->
        <div class="clearfix"></div>
        <hr class="divider" />
        <div class="clearfix"></div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li class=''><a href="{!!URL::to('/admin')!!}"><i class='fa fa-bar-chart'></i><span>Estadísticas</span></a>
                </li>
                <li class='has_sub'><a href=""><i class='fa fa-user-plus'></i><span>Usuarios</span></a>
                  <ul>
                    <li class='has_sub'><a href="{!!URL::to('/admin/personal')!!}"><i class='fa fa-user-plus'></i><span>Personal</span></a>
                      <ul>
                        <li><a href="{!!URL::to('/admin/personal')!!}"><span>Consultar</span></a></li>
                        <li><a href="{!!URL::to('/admin/crearPersonal')!!}"><span>Crear</span></a></li>
                      </ul>
                    </li>
                    <li class='has_sub'><a href=""><i class='fa fa-user-plus'></i><span>Alumnos</span></a>
                      <ul>
                        <li><a href="{!!URL::to('/admin/alumnos')!!}"><span>Consultar</span></a></li>
                        <li><a href="{!!URL::to('/admin/crearAlumnos')!!}"><span>Crear</span></a></li>
                      </ul>
                    </li>
                    <li class='has_sub'><a href=""><i class='fa fa-user-plus'></i><span>Tutores</span></a>
                      <ul>
                        <li><a href="{!!URL::to('/admin/tutores')!!}"><span>Consultar</span></a></li>
                        <li><a href="{!!URL::to('/admin/crearTutor')!!}"><span>Crear</span></a></li>
                        
                      </ul>
                    </li>
                </ul>
                </li>
                <li class=''><a href="{!!URL::to('/admin/asociarTutor')!!}"><i class='fa fa-users'></i><span>Asociar Tutor-Alumno</span></a></li>
                </li>
                <li class='has_sub'><a href="{!!URL::to('/admin/cursos')!!}"><i class='fa fa-book '></i><span>Cursos</span></a>
                  <ul>
                    <li><a href="{!!URL::to('/admin/cursos')!!}"><span>Consultar</span></a></li>
                    <li><a href="{!!URL::to('/admin/crear_curso')!!}"><span>Crear</span></a></li>
                  </ul>
                </li>
                <li class='has_sub'><a href='/admin/rolesypermisos'><i class='fa fa-key '></i><span>Roles y permisos</span></a>
                  <ul>
                      <li><a href="{!!URL::to('/admin/rolesypermisos')!!}"><span>Dar de alta /modificar</span></a></li>
                      <li><a href='/admin/consultarPermisos'><span>Consultar</span></a></li>
                  </ul>
                </li>
                <li class=''><a href="{!!URL::to('/admin/escuelas')!!}"><i class='fa fa-university'></i><span>Datos de Escuela</span></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
