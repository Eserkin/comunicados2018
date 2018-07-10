<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

    /**
     * Generated
     */

    protected $table = 'courses';
    protected $fillable = ['id', 'grado', 'nivel', 'aula', 'turno'];


    public function staffSchoolCourses() {
        return $this->hasMany(\Comunicados\StaffSchoolCourse::class, 'curso_id', 'id');
    }

    public function studentCourseSubjects() {
        return $this->hasMany(\Comunicados\StudentCourseSubject::class, 'curso_id', 'id');
    }

}
