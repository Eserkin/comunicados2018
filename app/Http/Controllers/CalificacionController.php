<?php

namespace Comunicados\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use Auth;
use DB;
class CalificacionController extends Controller
{
    public function create()
    {
        return view('\schools/subir_calificacion');
    }
}
