<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class StudentCourseSubject extends Model {

    /**
     * Generated
     */

    protected $table = 'student_course_subject';
    protected $fillable = ['alumno_id', 'materia_id', 'curso_id', 'fecha', 'asiste', 'justificativo_url'];


    public function course() {
        return $this->belongsTo(\Comunicados\Course::class, 'curso_id', 'id');
    }

    public function student() {
        return $this->belongsTo(\Comunicados\Student::class, 'alumno_id', 'dni');
    }

    public function subject() {
        return $this->belongsTo(\Comunicados\Subject::class, 'materia_id', 'id');
    }


}
