<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class StudentEvaluation extends Model {

    /**
     * Generated
     */

    protected $table = 'student_evaluation';
    protected $fillable = ['alumno_id', 'evaluacion_id', 'calificacion', 'esta_aprobacion', 'fecha','evaluacion_url'];


    public function evaluation() {
        return $this->belongsTo(\Comunicados\Evaluation::class, 'evaluacion_id', 'id');
    }

    public function student() {
        return $this->belongsTo(\Comunicados\Student::class, 'alumno_id', 'dni');
    }


}
