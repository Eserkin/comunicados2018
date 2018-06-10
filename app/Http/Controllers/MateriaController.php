<?php

namespace Comunicados\Http\Controllers;

use Illuminate\Http\Request;
use Comunicados\Subject;
use Comunicados\User;
use Comunicados\School;
use Session;
use Redirect;
use Auth;
use DB;

class MateriaController extends Controller
{
	
    public function __construct()
    {
        $this->middleware('auth');
    }	
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects =DB::table('subjects')
                ->join('schools', 'schools.id', '=', 'subjects.escuela_id')
                ->join('users', 'subjects.profesor', '=', 'users.dni')		
                ->select('subjects.*','schools.nombre as nombre_escuela','users.*')
                ->paginate(20);
				
        return view ('\subjects/listar_materias', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('\subjects/crear_materia');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subject= new Subject($request->all());
        $subject->save();
        dd('Materia creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject  = Subject::find($id);
		$school   = School::where('id',$subject->escuela_id)->first();
		$profesor = User::where('dni',$subject->profesor)->first();
        return view ('\subjects/ver_materia', compact('subject','school','profesor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
