<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class MessagesType extends Model {

    /**
     * Generated
     */

    protected $table = 'messages_types';
    protected $fillable = ['id', 'tipo', 'es_general?', 'requiere_firma?'];


    public function messages() {
        return $this->hasMany(\Comunicados\Message::class, 'mensaje_tipo_id', 'id');
    }


}
