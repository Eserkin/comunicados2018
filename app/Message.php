<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {

    /**
     * Generated
     */

    protected $table = 'messages';
    protected $fillable = ['id', 'titulo','asunto', 'mensaje', 'mensaje_padre_id', 'mensaje_tipo_id', 'user_envia', 'escuela_id','adjunto'];


    public function user() {
        return $this->belongsTo(\Comunicados\User::class, 'user_envia', 'dni');
    }

    public function school() {
        return $this->belongsTo(\Comunicados\School::class, 'escuela_id', 'id');
    }

    public function message() {
        return $this->belongsTo(\Comunicados\Message::class, 'mensaje_padre_id', 'id');
    }

    public function messagesType() {
        return $this->belongsTo(\Comunicados\MessagesType::class, 'mensaje_tipo_id', 'id');
    }

    public function users() {
        return $this->belongsToMany(\Comunicados\User::class, 'message_recipient', 'mensaje_id', 'recibe_dni');
    }

    public function messageRecipients() {
        return $this->hasMany(\Comunicados\MessageRecipient::class, 'mensaje_id', 'id');
    }

    public function messages() {
        return $this->hasMany(\Comunicados\Message::class, 'mensaje_padre_id', 'id');
    }


}
