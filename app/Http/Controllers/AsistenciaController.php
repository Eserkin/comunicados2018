<?php

namespace Comunicados\Http\Controllers;

use Illuminate\Http\Request;
use Comunicados\School;
use Comunicados\StaffSchoolCourse;
use Comunicados\StudentCourseSubject;
use Auth;
use DB;
use Carbon\Carbon;
use Redirect;

class AsistenciaController extends Controller
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

    public function verTomarAsistencias()
    {
        $escuelas= DB::table('schools')
                  ->join ('staff_school_courses', 'schools.id', '=', 'staff_school_courses.escuela_id')
                  ->select('schools.id', 'schools.nombre', 'schools.numero')
                  ->where('staff_school_courses.dni',Auth::user()->dni)
                  ->distinct()
                  ->get();

        return view ('schools/tomar_asistencias', compact('escuelas')); 
    }


    public function cargarEscuelas(Request $request){
        if($request->ajax()){

            $escuelas= DB::table('schools')
                  ->join ('staff_school_courses', 'schools.id', '=', 'staff_school_courses.escuela_id')
                  ->select('schools.id', 'schools.nombre', 'schools.numero')
                  ->where('staff_school_courses.dni',Auth::user()->dni)
                  ->distinct()
                  ->get();

            return response()->json($escuelas);
        }
       
    } 

    public function seleccionarCursos(Request $request, $escuela_id){
        if($request->ajax()){
            $cursos= DB::table('courses')
            ->join ('staff_school_courses', 'courses.id', '=', 'staff_school_courses.curso_id')
            ->select('courses.id', 'courses.grado', 'courses.aula','courses.turno')
            ->where('staff_school_courses.dni',Auth::user()->dni)
            ->where('staff_school_courses.escuela_id',$escuela_id)
            ->get();

            return response()->json($cursos);
        }
       
    } 

    public function seleccionarMateria(Request $request, $curso_id){
        if($request->ajax()){
            $materias= DB::table('subjects')
            ->join ('student_course_subject', 'subjects.id', '=', 'student_course_subject.materia_id')
            ->select('subjects.id', 'subjects.titulo', 'subjects.dia_cursada','subjects.hora_cursada')
            ->where('subjects.profesor',Auth::user()->dni)
            ->where('student_course_subject.curso_id',$curso_id)
            ->get();

            return response()->json($materias);
        }
       
    } 

    public function seleccionarAlumnoEval(Request $request, $curso_id){
        if($request->ajax()){
            $alumnos=DB::table('students')
                  ->join('users', 'users.dni', '=', 'students.dni')
                  ->join ('student_course_subject','students.dni','=','student_course_subject.alumno_id')
                  ->join ('courses','student_course_subject.curso_id','=','courses.id')
                  ->select('users.dni','users.nombre', 'users.apellido')
                  ->where('courses.id',$curso_id)
                  ->distinct()
                  ->get();

            return response()->json($alumnos);
        }
       
    } 

    public function cargarAsistencias(Request $request )
    {

        //if($request->ajax()){

            foreach ( $request->asistio as $key => $val){
                $data=array(
                    'alumno_id'=>$request->asistio[$key],
                    'materia_id'=>$request->seleccionCurso,
                    'curso_id'=>$request->seleccionMateria,
                    'fecha'=>$request->fecha,
                    'asiste'=>"1",
                    'justificativo_url'=>"null",
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                    );
                StudentCourseSubject::insert($data);
               
            }

        //} 
        
        
        return redirect::to('personal/asistencias');
    }


}
