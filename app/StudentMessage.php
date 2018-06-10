<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class StudentMessage extends Model {

    /**
     * Generated
     */

    protected $table = 'student_message';
    protected $fillable = ['alumno_id', 'mensaje_id'];


    public function message() {
        return $this->belongsTo(\Comunicados\Message::class, 'mensaje_id', 'id');
    }

    public function student() {
        return $this->belongsTo(\Comunicados\Student::class, 'alumno_id', 'dni');
    }


}
