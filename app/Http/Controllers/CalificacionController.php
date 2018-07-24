<?php

namespace Comunicados\Http\Controllers;

use Illuminate\Http\Request;
use Comunicados\StudentEvaluation;
use Comunicados\Evaluation;
use Comunicados\Subject;
use Comunicados\Message;
use Comunicados\User;
use Comunicados\MessageRecipient;
use Session;
use Redirect;
use Auth;
use DB;
use Carbon\Carbon;


class CalificacionController extends Controller
{

    public function seleccionarEvaluacion(Request $request, $materia_id){
        if($request->ajax()){

            $evaluaciones= DB::table('evaluations')
                  ->join('subjects', 'subjects.id','=','evaluations.materia_id')
                  ->select('evaluations.id', 'evaluations.fecha', 'evaluations.periodo','evaluations.temas')
                  ->where('subjects.profesor',Auth::user()->dni)
                  ->where('evaluations.materia_id',$materia_id)
                  ->distinct('evaluations.id')
                  ->get();

            return response()->json($evaluaciones);
        }
       
    } 

    public function seleccionarAlumnoEval(Request $request, $evaluacion_id){
        if($request->ajax()){

            $alumnosEval= DB::table('students')
                  ->join('users', 'users.dni','=','students.dni')
                  ->join('student_evaluation', 'student_evaluation.alumno_id','=','students.dni')
                  ->select('users.nombre', 'users.apellido', 'students.dni')
                  ->where('student_evaluation.evaluacion_id',$evaluacion_id)
                  ->whereNull('student_evaluation.calificacion')
                  ->distinct('students.dni')
                  ->get();

            return response()->json($alumnosEval);
        }
       
    } 

    public function verCalificacionAlumno()
    {
        $materias=DB::table('student_course_subject')
                ->join('subjects','subjects.id','=','student_course_subject.materia_id')
                ->select ('subjects.titulo')
                ->where ('student_course_subject.alumno_id',Auth::user()->dni)
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
        $hijos =DB::table('student_parent')
                ->join('students', 'students.dni', '=', 'student_parent.alumno_id')
                ->join('users', 'users.dni', '=', 'students.dni')
                ->join('student_course_subject', 'student_course_subject.alumno_id','=','students.dni')
                ->join('courses', 'courses.id', '=','student_course_subject.curso_id')
                ->select('student_parent.alumno_id','students.estado','users.nombre','users.apellido','users.foto_url','courses.grado', 'courses.nivel','courses.turno' )
                ->where('student_parent.padre_id',Auth::user()->dni)
                ->distinct('alumno_id')
                ->get();

        return view('\parents/calificacion', compact('hijos') );
    }

    public function mostrarMateriasDelAlumnoTutor(Request $request, $alumnoId)
    {
        if($request->ajax()){

            $materias=DB::table('student_course_subject')
                ->join('subjects','subjects.id','=','student_course_subject.materia_id')
                ->select ('subjects.titulo')
                ->where ('student_course_subject.alumno_id',$alumnoId)
                ->distinct()
                ->get();


            return response()->json($materias);

            //return response()->json(array('materias'=>$materias, 'primerPeriodo'=>$primerPeriodo, 'segundoPeriodo'=>$segundoPeriodo,'tercerPeriodo'=>$tercerPeriodo ),200 );
        }
    }

    public function mostrarCalificacionesATutor(Request $request, $alumnoId)
    {
        if($request->ajax()){

            $calificaciones=DB::table('student_evaluation')
            ->join('evaluations','evaluations.id','=','student_evaluation.evaluacion_id')
            ->join('subjects','subjects.id','=','evaluations.materia_id')
            ->select ('subjects.titulo','student_evaluation.alumno_id as alumno', 'student_evaluation.calificacion as calificacion','student_evaluation.estado_aprobacion','student_evaluation.fecha as fecha','evaluations.periodo', 'evaluations.temas', 'subjects.titulo as materia')
            ->where ('alumno_id',$alumnoId)
            ->distinct('subjects.titulo')
            ->get();


            return response()->json($calificaciones);

            //return response()->json(array('materias'=>$materias, 'primerPeriodo'=>$primerPeriodo, 'segundoPeriodo'=>$segundoPeriodo,'tercerPeriodo'=>$tercerPeriodo ),200 );
        }
    }


    public function subirCalificacion()
    {
        return view('\schools/subir_calificacion');
    }

    public function cargarCalificacion(Request $request)
    {
        $alumno=User::where('dni', $request->seleccionAlumno)->first();

        StudentEvaluation::where('alumno_id',$request->seleccionAlumno)
          ->where('evaluacion_id',$request->seleccionEvaluacion)
          ->update(['calificacion' => $request->calificacion]);
        
         //Enviar a todos los alumnos
        if($request->enviar_alumnos){
            $curso_id=$request->seleccionCurso;

            
            $evaluacion=Evaluation::find($request->seleccionEvaluacion);
            $materia=Subject::find($request->seleccionMateria);

            $mensaje=new Message;
            $mensaje->titulo="Calificación";
            $mensaje->asunto="Calificación evaluación de ".$materia->titulo." - Alumno/a: ".$alumno->nombre.", ".$alumno->apellido;
            $mensaje->mensaje="<p>Se le notifica sobre la evaluación de ".$materia->titulo." realizada por ".$alumno->nombre.", ".$alumno->apellido."</p><br><p> Fecha: ".$evaluacion->fecha."</p>.<br><p>Temas tomados: ".$evaluacion->temas.".</p><br><p>Calificación: ".$request->calificacion."</p>";
            $mensaje->user_destino="0";
            $mensaje->mensaje_tipo_id="10";
            $mensaje->user_envia=Auth::user()->dni;
            $mensaje->escuela_id=$request->seleccionEscuela;
            $mensaje->adjunto="null";
            $mensaje->save();

            $mensajeRecibe =new MessageRecipient;
            $mensajeRecibe->mensaje_id=$mensaje->id;
            $mensajeRecibe->recibe_dni=$alumno->dni;
            $mensajeRecibe->fue_leido="0";
            $mensajeRecibe->fue_firmado="0";
            $mensajeRecibe->save();
            

            //Funcion para enviar a los tutores
            if($request->enviar_tutores){
                $curso_id=$request->seleccionCurso;

                $tutores=DB::table('student_parent')
                    ->select('padre_id')
                    ->where('alumno_id',$alumno->dni)
                    ->distinct('padre_id')
                    ->get();


                foreach ( $tutores as $tutor){
                    $data=array(
                        'mensaje_id'=>$mensaje->id,
                        'recibe_dni'=>$tutor->padre_id,
                        'fue_leido'=>"0",
                        'fue_firmado'=>"0",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                        );
                    MessageRecipient::insert($data); 
                }

            }//Final de funcion para enviar a los tutores
            
        }//Final de funcion para enviar a todos los alumnos


        return redirect::to('personal/calificaciones/subir');  
    }
}
