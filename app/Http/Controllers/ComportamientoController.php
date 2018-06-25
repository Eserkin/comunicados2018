<?php

namespace Comunicados\Http\Controllers;

use Illuminate\Http\Request;
use Comunicados\Message;
use Comunicados\User;
use Comunicados\MessageRecipient;
use Comunicados\StudentParent;
use Session;
use Redirect;
use Auth;
use DB;

class ComportamientoController extends Controller
{
    public function verDistincionesTutor()
    {

        $hijos =DB::table('student_parent')
                ->join('students', 'students.dni', '=', 'student_parent.alumno_id')
                ->join('users', 'users.dni', '=', 'students.dni')
                ->select('alumno_id','students.estado','nombre','apellido' )
                ->where('student_parent.padre_id',Auth::user()->dni)
                ->distinct('alumno_id')
                ->get();


            $distinciones =DB::table('messages')
                ->join('message_recipient', 'messages.id', '=', 'message_recipient.mensaje_id')
                ->join('messages_types', 'messages_types.id', '=', 'messages.mensaje_tipo_id')
                ->join('users', 'messages.user_envia', '=', 'users.dni')
            ->select('messages.created_at','messages.mensaje','message_recipient.fue_firmado','users.nombre', 'users.apellido','message_recipient.recibe_dni')
                ->whereIn('message_recipient.recibe_dni',function($query)
                {
                    $query->select('alumno_id')
                          ->from('student_parent')
                          ->where('student_parent.padre_id',Auth::user()->dni)
                          ->get();
                })
                ->where('messages_types.id',5)
                ->distinct('messages.id')
                ->paginate(20);     

        return view ('parents/distinciones', compact('distinciones','hijos'));
    }

    public function verDistincionesAlumno()
    {
        $distinciones =DB::table('messages')
                ->join('message_recipient', 'messages.id', '=', 'message_recipient.mensaje_id')
                ->join('messages_types', 'messages_types.id', '=', 'messages.mensaje_tipo_id')
                ->join('users', 'messages.user_envia', '=', 'users.dni')
                ->select('messages.created_at','messages.mensaje','message_recipient.fue_firmado','users.nombre', 'users.apellido')
                ->where('message_recipient.recibe_dni',Auth::user()->dni)
                ->where('messages_types.id',5)
                ->distinct('messages.id')
                ->paginate(20);
        return view ('commons/distinciones', compact('distinciones'));
    }

    public function verSancionesTutor()
    {

        $hijos =DB::table('student_parent')
                ->join('students', 'students.dni', '=', 'student_parent.alumno_id')
                ->join('users', 'users.dni', '=', 'students.dni')
                ->select('alumno_id','students.estado','nombre','apellido' )
                ->where('student_parent.padre_id',Auth::user()->dni)
                ->distinct('alumno_id')
                ->get();


            $sanciones =DB::table('messages')
                ->join('message_recipient', 'messages.id', '=', 'message_recipient.mensaje_id')
                ->join('messages_types', 'messages_types.id', '=', 'messages.mensaje_tipo_id')
                ->join('users', 'messages.user_envia', '=', 'users.dni')
            ->select('messages.created_at','messages.mensaje','message_recipient.fue_firmado','users.nombre', 'users.apellido','message_recipient.recibe_dni')
                ->whereIn('message_recipient.recibe_dni',function($query)
                {
                    $query->select('alumno_id')
                          ->from('student_parent')
                          ->where('student_parent.padre_id',Auth::user()->dni)
                          ->get();
                })
                ->where('messages_types.id',7)
                ->distinct('messages.id')
                ->paginate(20);     

        return view ('parents/sanciones', compact('sanciones','hijos'));
    }

    public function verSancionesAlumno()
    {
    	 $sanciones =DB::table('messages')
                ->join('message_recipient', 'messages.id', '=', 'message_recipient.mensaje_id')
                ->join('messages_types', 'messages_types.id', '=', 'messages.mensaje_tipo_id')
                ->join('users', 'messages.user_envia', '=', 'users.dni')
                ->select('messages.created_at','messages.mensaje','message_recipient.fue_firmado','users.nombre', 'users.apellido')
                ->where('message_recipient.recibe_dni',Auth::user()->dni)
                ->where('messages_types.id',7)
                ->distinct('messages.id')
                ->paginate(20);
        return view ('commons/sanciones', compact('sanciones'));
    }

    public function verObservacionesAlumno()
    {
         $observaciones =DB::table('messages')
                ->join('message_recipient', 'messages.id', '=', 'message_recipient.mensaje_id')
                ->join('messages_types', 'messages_types.id', '=', 'messages.mensaje_tipo_id')
                ->join('users', 'messages.user_envia', '=', 'users.dni')
                ->select('messages.created_at','messages.mensaje','message_recipient.fue_firmado','users.nombre', 'users.apellido')
                ->where('message_recipient.recibe_dni',Auth::user()->dni)
                ->where('messages_types.id',6)
                ->distinct('messages.id')
                ->paginate(20);
        return view ('commons/observaciones', compact('observaciones'));
    }

    public function verObservacionesTutor()
    {
          $hijos =DB::table('student_parent')
                ->join('students', 'students.dni', '=', 'student_parent.alumno_id')
                ->join('users', 'users.dni', '=', 'students.dni')
                ->select('alumno_id','students.estado','nombre','apellido' )
                ->where('student_parent.padre_id',Auth::user()->dni)
                ->distinct('alumno_id')
                ->get();


            $observaciones =DB::table('messages')
                ->join('message_recipient', 'messages.id', '=', 'message_recipient.mensaje_id')
                ->join('messages_types', 'messages_types.id', '=', 'messages.mensaje_tipo_id')
                ->join('users', 'messages.user_envia', '=', 'users.dni')
            ->select('messages.created_at','messages.mensaje','message_recipient.fue_firmado','users.nombre', 'users.apellido','message_recipient.recibe_dni')
                ->whereIn('message_recipient.recibe_dni',function($query)
                {
                    $query->select('alumno_id')
                          ->from('student_parent')
                          ->where('student_parent.padre_id',Auth::user()->dni)
                          ->get();
                })
                ->where('messages_types.id',6)
                ->distinct('messages.id')
                ->paginate(20);     

        return view ('parents/observaciones', compact('observaciones','hijos'));
    }

}
