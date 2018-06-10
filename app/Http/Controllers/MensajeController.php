<?php

namespace Comunicados\Http\Controllers;

use Illuminate\Http\Request;
use Comunicados\Message;
use Comunicados\User;
use Comunicados\MessageRecipient;
use Session;
use Redirect;
use Auth;
use DB;

class MensajeController extends Controller
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
        $mensajes =DB::table('messages')
                ->join('message_recipient', 'messages.id', '=', 'message_recipient.mensaje_id')
                ->join('messages_types', 'messages.mensaje_tipo_id', '=', 'messages_types.id')
                ->select('messages.id','messages.titulo','messages.asunto','messages.mensaje','messages.adjunto','messages.created_at')
                ->where('message_recipient.recibe_dni',Auth::user()->dni)
                ->distinct('messages.id')
                ->paginate(20);
        return view ('commons/listar_mensajes', compact('mensajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('commons/crear_mensaje');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mensaje= new Message($request->all());
        $mensaje->save();
        //$mensaje->titulo= 
        dd('Usuario creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $mensaje = DB::table('messages')
        //         //->join('users', 'messages.user_envia', '=', 'users.dni')
        //         ->select('messages.*')
        //         ->where('messages.id','$id')
        //         ->get();
        $mensaje = Message::find($id);
        if($mensaje->mensaje_padre_id){
            $mensaje_padre = Message::find($mensaje->mensaje_padre_id);
        }
        $envia=User::where('dni',$mensaje->user_envia)->first();
        return view ('commons/leer_mensajes', compact('mensaje','envia','mensaje_padre'));
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

    public function verMensajesNoFirmados()
    {
        $sinFirmar =DB::table('messages')
                ->join('message_recipient', 'messages.id', '=', 'message_recipient.mensaje_id')
                ->join('messages_types', 'messages.mensaje_tipo_id', '=', 'messages_types.id')
                ->select('messages.id','messages.titulo','messages.asunto','messages.mensaje','messages.adjunto','messages.created_at','messages_types.id as tipo')
                ->where('message_recipient.recibe_dni',Auth::user()->dni)
                ->where('messages_types.requiere_firma?',1)
                ->distinct('messages.id')
                ->paginate(20);
        return view ('parents/firmar', compact('sinFirmar'));
    }
}
