<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class ParentMessage extends Model {

    /**
     * Generated
     */

    protected $table = 'parent_message';
    protected $fillable = ['padre_id', 'mensaje_id', 'fue_visto?', 'firmado?'];


    public function parent() {
        return $this->belongsTo(\Comunicados\Parent::class, 'padre_id', 'dni');
    }

    public function message() {
        return $this->belongsTo(\Comunicados\Message::class, 'mensaje_id', 'id');
    }


}
