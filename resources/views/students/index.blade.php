@extends('layouts.general')

@section('title','Comunicados- Acceso Estudiantes')


@section ('styles')
@endsection


@section ('sidebar')
	@include('students.student_sidebar')
@endsection

@section ('content')
                <!-- Start info box -->
                <div class="row top-summary">
                    <div class="col-lg-3 col-md-6">
                        <div class="widget green-1 animated fadeInDown">
                            <div class="widget-content padding">
                                <div class="widget-icon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="text-box">
                                    <p class="maindata">Promedio de calificaciones <br> <b>del alumno</b></p>
                                    <h2 class="text-center"><span class="animate-number" data-value="7" data-duration="1500">0</span></h2>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="widget-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <i class="fa fa-caret-up rel-change"></i> <b>27%</b> mayor al mes pasado
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="widget orange-4 animated fadeInDown">
                            <div class="widget-content padding">
                                <div class="widget-icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="text-box">
                                    <p class="maindata">Promedio de Calificaciones<br> <b>del curso. </b></p>
                                    <h2 class="text-center"><span class="animate-number" data-value="4" data-duration="1500">0</span></h2>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="widget-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <i class="fa fa-caret-down rel-change"></i> <b>7%</b> menor al mes pasado
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="widget darkblue-2 animated fadeInDown">
                            <div class="widget-content padding">
                                <div class="widget-icon">
                                    <i class="fa fa-note"></i>
                                </div>
                                <div class="text-box">
                                    <p class="maindata"><b>Materias</b> Cursando</p>
                                    <h2 class="text-center"><span class="animate-number" data-value="12" data-duration="1500">0</span></h2>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="widget-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                     <b>7º B</b>- Turno Mañana
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="widget lightblue-1 animated fadeInDown">
                            <div class="widget-content padding">
                                <div class="widget-icon">
                                    <i class="fa fa-percent"></i>
                                </div>
                                <div class="text-box">
                                    <p class="maindata">Porcentaje <b>ASISTENCIA</b></p>
                                    <h2 class="text-center"><span class="animate-number" data-value="85" data-duration="1500">0</span></h2>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="widget-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <i class="fa fa-caret-up rel-change"></i> <b>6%</b> mayor al mes pasado
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End of info box -->
                
                <!-- Page Heading Start -->
                <div class="page-heading">
                    <h1><i class='icon-arrows-ccw'></i> Últimas notificaciones</h1>
                </div>
                <!-- Page Heading End-->                
                <div class="row">
                    <div class="col-sm-6 portlets">
                        <div class="widget blue-1">
                            <div class="widget-header ">
                                <h2><i class="icon-chart-pie-1"></i> <strong>Acto escolar</strong> </h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                      <a class="hidden" id="dropdownMenu1" data-toggle="dropdown">
                                        <i class="fa fa-cogs"></i>
                                      </a>
                                      <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                      </ul>
                                     <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
                                    <a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div class="widget-content padding">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et lorem sollicitudin, laoreet leo a, sodales mauris. Integer egestas, nunc non elementum faucibus, augue augue aliquet tellus, non ultrices sapien quam vitae ligula. Proin luctus sed ante et eleifend. Nunc pharetra porta lacus vel gravida. Mauris tempor mollis est, vel posuere nisl mollis nec. Sed semper ipsum ut dignissim tempor. Etiam enim arcu, imperdiet a scelerisque eu, lobortis quis magna. Nullam vestibulum adipiscing odio, sit amet pharetra felis aliquam et. Suspendisse id gravida odio, at blandit felis. Etiam posuere, lorem sit amet accumsan pretium, diam purus rhoncus eros, at porta ipsum ipsum eget nisi. Proin posuere nunc lacus, a mollis lacus dapibus quis. Duis rutrum augue id turpis fermentum bibendum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 portlets">
                        <div class="widget">
                            <div class="widget-header ">
                                <h2><strong>Standard</strong> Portlet</h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div class="widget-content padding">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et lorem sollicitudin, laoreet leo a, sodales mauris. Integer egestas, nunc non elementum faucibus, augue augue aliquet tellus, non ultrices sapien quam vitae ligula. Proin luctus sed ante et eleifend. Nunc pharetra porta lacus vel gravida. Mauris tempor mollis est, vel posuere nisl mollis nec. Sed semper ipsum ut dignissim tempor. Etiam enim arcu, imperdiet a scelerisque eu, lobortis quis magna. Nullam vestibulum adipiscing odio, sit amet pharetra felis aliquam et. Suspendisse id gravida odio, at blandit felis. Etiam posuere, lorem sit amet accumsan pretium, diam purus rhoncus eros, at porta ipsum ipsum eget nisi. Proin posuere nunc lacus, a mollis lacus dapibus quis. Duis rutrum augue id turpis fermentum bibendum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 portlets">
                    <div class="widget red-1">
                            <div class="widget-header">
                                <h2><strong>Red</strong> Portlet</h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div class="widget-content padding">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et lorem sollicitudin, laoreet leo a, sodales mauris. Integer egestas, nunc non elementum faucibus, augue augue aliquet tellus, non ultrices sapien quam vitae ligula. Proin luctus sed ante et eleifend. Nunc pharetra porta lacus vel gravida. Mauris tempor mollis est, vel posuere nisl mollis nec. Sed semper ipsum ut dignissim tempor. Etiam enim arcu, imperdiet a scelerisque eu, lobortis quis magna. Nullam vestibulum adipiscing odio, sit amet pharetra felis aliquam et. Suspendisse id gravida odio, at blandit felis. Etiam posuere, lorem sit amet accumsan pretium, diam purus rhoncus eros, at porta ipsum ipsum eget nisi. Proin posuere nunc lacus, a mollis lacus dapibus quis. Duis rutrum augue id turpis fermentum bibendum.</p>                                
                            </div>
                        </div>
                </div>

                @include('layouts.footer')
@endsection


@section ('javascript')
@endsection