@extends('layouts.general')

@section('title','Comunicados- Calendario')


@section ('styles')
@endsection


@section ('sidebar')
    @if(Auth::user()->tipo=="personal")
        @include('schools.school_sidebar')
    @elseif(Auth::user()->tipo=="tutor")
        @include('parents.parents_sidebar')
    @elseif(Auth::user()->tipo=="alumno")
        @include('students.student_sidebar')
    @endif
@endsection

@section ('content')
            <div class="content">
                
                <div class="row">
                    <div class="col-md-12 portlets">
                        <div class="widget">
                            <div class="widget-header">
                                <h2>Calendario</h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div class="widget-content padding">
                                
                                <div class="col-md-12">
                                    <div class="widget bg-white">
                                        <div class="widget-body">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div id="calendar"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@include('layouts.footer')
@endsection

@section ('javascript')
@endsection