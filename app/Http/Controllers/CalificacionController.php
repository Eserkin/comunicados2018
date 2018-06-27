<?php

namespace Comunicados\Http\Controllers;

use Illuminate\Http\Request;
use Comunicados\StudentEvaluation;
use Comunicados\Evaluation;
use Comunicados\Subject;
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

    public function verCalificacionAlumno()
    {
        $materias=DB::table('student_evaluation')
        ->join('evaluations','evaluations.id','=','student_evaluation.evaluacion_id')
        ->join('subjects','subjects.id','=','evaluations.materia_id')
        ->select ('subjects.titulo')
        ->where ('alumno_id',Auth::user()->dni)
        ->distinct()
        ->get();

        $primerPeriodo=DB::table('student_evaluation')
        ->join('evaluations','evaluations.id','=','student_evaluation.evaluacion_id')
        ->join('subjects','subjects.id','=','evaluations.materia_id')
        ->select ('student_evaluation.alumno_id as alumno', 'student_evaluation.calificacion', 'student_evaluation.estado_aprobacion' ,'student_evaluation.fecha','evaluations.periodo', 'evaluations.temas', 'subjects.titulo as materia')
        ->where ('alumno_id',Auth::user()->dni)
        ->where('periodo',1)
        ->get();

        $segundoPeriodo=DB::table('student_evaluation')
        ->join('evaluations','evaluations.id','=','student_evaluation.evaluacion_id')
        ->join('subjects','subjects.id','=','evaluations.materia_id')
        ->select ('student_evaluation.alumno_id as alumno', 'student_evaluation.calificacion', 'student_evaluation.estado_aprobacion' ,'student_evaluation.fecha','evaluations.periodo', 'evaluations.temas', 'subjects.titulo as materia')
        ->where ('alumno_id',Auth::user()->dni)
        ->where('periodo',2)
        ->get();

        $tercerPeriodo=DB::table('student_evaluation')
        ->join('evaluations','evaluations.id','=','student_evaluation.evaluacion_id')
        ->join('subjects','subjects.id','=','evaluations.materia_id')
        ->select ('student_evaluation.alumno_id as alumno', 'student_evaluation.calificacion', 'student_evaluation.estado_aprobacion' ,'student_evaluation.fecha','evaluations.periodo', 'evaluations.temas', 'subjects.titulo as materia')
        ->where ('alumno_id',Auth::user()->dni)
        ->where('periodo',3)
        ->get();

        return view ('students/calificacion', compact('primerPeriodo','segundoPeriodo','tercerPeriodo','materias'));
    }

    public function verCalificacionTutor()
    {
        return view('\tutor/calificacion');
    }
}
