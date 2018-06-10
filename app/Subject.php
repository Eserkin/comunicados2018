<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model {

    /**
     * Generated
     */

    protected $table = 'subjects';
    protected $fillable = ['id', 'titulo', 'profesor', 'dia_cursada', 'hora_cursada', 'escuela_id'];


    public function school() {
        return $this->belongsTo(\Comunicados\School::class, 'escuela_id', 'id');
    }

    public function schoolStaff() {
        return $this->belongsTo(\Comunicados\SchoolStaff::class, 'profesor', 'dni');
    }

    public function evaluations() {
        return $this->hasMany(\Comunicados\Evaluation::class, 'materia_id', 'id');
    }

    public function studentCourseSubjects() {
        return $this->hasMany(\Comunicados\StudentCourseSubject::class, 'materia_id', 'id');
    }


}
