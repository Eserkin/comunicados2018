<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model {

    /**
     * Generated
     */

    protected $table = 'evaluations';
    protected $fillable = ['id', 'materia_id', 'fecha', 'nota_promedio'];


    public function subject() {
        return $this->belongsTo(\Comunicados\Subject::class, 'materia_id', 'id');
    }

    public function students() {
        return $this->belongsToMany(\Comunicados\Student::class, 'student_evaluation', 'evaluacion_id', 'alumno_id');
    }

    public function studentEvaluations() {
        return $this->hasMany(\Comunicados\StudentEvaluation::class, 'evaluacion_id', 'id');
    }


}
