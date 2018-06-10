@extends('layouts.general')

@section('title','Comunicados- Subir justificativo médico')


@section ('styles')
    <link href="{{asset('assets/dropzone/css/dropzone.css')}}" rel="stylesheet" type="text/css" />
@endsection


@section ('sidebar')
	@include('parents.parents_sidebar')
@endsection

@section ('content')
                <!-- Page Heading Start -->
                <div class="page-heading">
                    <h1><i class='fa fa-magic'></i> Subir Justificativo Médicos</h1><br/>
                    <h3>Seleccione fecha de inasistencia</h3> 
                    <div class="form-group">
                        <div class="col-sm-5">
                            <select class="form-control">
                                <option>03-Mar</option>
                                <option>25-Abr</option>
                                <option>20-Mayo</option>
                                <option>26-Mayo</option>
                            </select>
                        </div>
                    </div>             
                </div>
                <br>
                <br>
                <!-- Page Heading End-->                
                <div class="row">
                    <div class="col-md-12 portlets">
                        <!-- Your awesome content goes here -->
                        <div class="widget">
                            <form action="upload.php" class="dropzone" id="dropzone">
                              <div class="fallback">
                                <input name="file" type="file" multiple />
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-5">
                        <button type="submit" class="btn btn-primary md-trigger btn-block">Subir</button>
                    </div>
                </div>



                @include('layouts.footer')
@endsection


@section ('javascript')
    <script src="{{asset('assets/dropzone/dropzone.min.js')}}"></script>
@endsection