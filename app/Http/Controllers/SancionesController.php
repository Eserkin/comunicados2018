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

class SancionesController extends Controller
{
    public function verSanciones()
    {
    	 $sanciones =DB::table('messages')
                ->join('message_recipient', 'messages.id', '=', 'message_recipient.id')
                ->join('messages_types', 'messages.mensaje_tipo_id', '=', 'messages_types.id')
                ->select('messages.*','message_recipient.*','messages_types.*')
                ->where('message_recipient.recibe_dni',Auth::user()->dni)
                ->paginate(20);
        return view ('commons/sanciones', compact('sanciones'));
    }
}
