<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class MessageRecipient extends Model {

    /**
     * Generated
     */

    protected $table = 'message_recipient';
    protected $fillable = ['id', 'mensaje_id', 'recibe_dni', 'fue_leido', 'fue_firmado'];


    public function message() {
        return $this->belongsTo(\Comunicados\Message::class, 'mensaje_id', 'id');
    }

    public function user() {
        return $this->belongsTo(\Comunicados\User::class, 'recibe_dni', 'dni');
    }


}
