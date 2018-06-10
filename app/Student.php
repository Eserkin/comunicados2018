<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {

    /**
     * Generated
     */

    protected $table = 'students';
    protected $fillable = ['dni', 'n_matricula', 'fecha_inscripcion'];


    public function user() {
        return $this->belongsTo(\Comunicados\User::class, 'dni', 'dni');
    }

    public function evaluations() {
        return $this->belongsToMany(\Comunicados\Evaluation::class, 'student_evaluation', 'alumno_id', 'evaluacion_id');
    }

    public function parents() {
        return $this->belongsToMany(\Comunicados\Parent::class, 'student_parent', 'alumno_id', 'padre_id');
    }

    public function studentCourseSubjects() {
        return $this->hasMany(\Comunicados\StudentCourseSubject::class, 'alumno_id', 'dni');
    }

    public function studentEvaluations() {
        return $this->hasMany(\Comunicados\StudentEvaluation::class, 'alumno_id', 'dni');
    }

    public function studentParents() {
        return $this->hasMany(\Comunicados\StudentParent::class, 'alumno_id', 'dni');
    }


}
