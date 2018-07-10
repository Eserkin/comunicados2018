<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class StaffSchoolCourse extends Model {

    /**
     * Generated
     */

    protected $table = 'staff_school_courses';
    protected $fillable = ['dni', 'escuela_id', 'curso_id'];


    public function schoolStaff() {
        return $this->belongsTo(\Comunicados\SchoolStaff::class, 'dni', 'dni');
    }

    public function school() {
        return $this->belongsTo(\Comunicados\School::class, 'escuela_id', 'id');
    }

    public function course() {
        return $this->belongsTo(\Comunicados\Course::class, 'curso_id', 'id');
    }

}
