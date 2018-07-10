<?php

namespace Comunicados\Http\Controllers;

use Illuminate\Http\Request;
use Comunicados\School;
use Session;
use Redirect;
use Auth;
use DB;

class EscuelaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $school =DB::table('schools')
                ->join('security_admins','security_admins.escuela_id','=','schools.id')
                ->select('*')
                ->where('security_admins.dni',Auth::user()->dni)
                ->first();

        return view ('\schools/ver_escuela', compact('school'));
    }

    public function actualizarEscuela(Request $request)
    {
        if($request->ajax()){
        $schoolID =$request->input("escuelaId");

        $schoolA=School::find($schoolID);

        $schoolA->modalidad=$request->input('modalidad');
        $schoolA->nivel=$request->input('nivel');
        $schoolA->numero=$request->input('numero');
        $schoolA->nombre=$request->input('nombre');
        $schoolA->direccion=$request->input('direccion');
        $schoolA->localidad=$request->input('localidad');
        $schoolA->provincia=$request->input('provincia');
        $schoolA->telefono=$request->input('telefono');
        $schoolA->fax=$request->input('fax');
        $schoolA->email=$request->input('email');
        $schoolA->pagina_web=$request->input('pagina_web');
        $schoolA->save();
        }
    }




	
}