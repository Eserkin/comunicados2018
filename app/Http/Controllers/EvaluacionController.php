<?php

namespace Comunicados\Http\Controllers;

use Illuminate\Http\Request;
use Comunicados\School;
use Comunicados\Evaluation;
use Comunicados\Message;
use Comunicados\MessageRecipient;
use Comunicados\Subject;
use Comunicados\StudentParent;
use Auth;
use DB;
use Carbon\Carbon;
use Redirect;

class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function verCrearEvaluacion()
    {
        $escuelas= DB::table('schools')
                  ->join ('staff_school_courses', 'schools.id', '=', 'staff_school_courses.escuela_id')
                  ->select('schools.id', 'schools.nombre', 'schools.numero')
                  ->where('staff_school_courses.dni',Auth::user()->dni)
                  ->distinct()
                  ->get();

        return view('\schools/crear_evaluacion',compact('escuelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crearEvaluacion(Request $request)
    {
        $evaluacion=new Evaluation;
        $evaluacion->materia_id=$request->seleccionMateria;
        $evaluacion->fecha=$request->fecha;
        $evaluacion->periodo="1";
        $evaluacion->temas=$request->temas;
        $evaluacion->descripcion=$request->descripcion;
        if($request->enviar_alumnos)$evaluacion->enviado_alumnos="1";
        if($request->enviar_tutores)$evaluacion->enviado_tutores="1";
        $evaluacion->save();

        //Enviar a todos los alumnos
        if($request->enviar_alumnos){
            $curso_id=$request->seleccionCurso;

            $alumnos=DB::table('student_course_subject')
                    ->select('alumno_id')
                    ->where('curso_id',$curso_id)
                    ->distinct()
                    ->get();

            $materia=Subject::find($request->seleccionMateria);

            $mensaje=new Message;
            $mensaje->titulo="Evaluacion";
            $mensaje->asunto="Notificación evaluación de ".$materia->titulo;
            $mensaje->mensaje="<p>Se le notifica al alumno que la evaluación de ".$materia->titulo." se realizará el ".$request->fecha."</p>.<br><p>La misma incluirá los temas: ".$request->temas.".</p><br><p>".$request->descripcion."</p>";
            $mensaje->user_destino="0";
            $mensaje->mensaje_tipo_id="10";
            $mensaje->user_envia=Auth::user()->dni;
            $mensaje->escuela_id=$request->seleccionEscuela;
            $mensaje->adjunto="null";
            $mensaje->save();


            foreach ( $alumnos as $alumno){
                $data=array(
                    'mensaje_id'=>$mensaje->id,
                    'recibe_dni'=>$alumno->alumno_id,
                    'fue_leido'=>"0",
                    'fue_firmado'=>"0",
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                    );
                MessageRecipient::insert($data); 
            }

            //Funcion para enviar a los tutores
            if($request->enviar_tutores){
                $curso_id=$request->seleccionCurso;
                //$hijos=array($alumnos);


                $tutores=DB::table('student_parent')
                    ->select('padre_id')
                    //->whereIn('alumno_id',$hijos)
                    ->whereIn('alumno_id',function($query)
                        {
                            $query->select('alumno_id')
                                  ->from('student_course_subject')
                                  ->where('curso_id','$curso_id')
                                  ->distinct()
                                  ->get();
                        })
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

        return redirect::to('personal/evaluaciones/crear');
    }

 
}
