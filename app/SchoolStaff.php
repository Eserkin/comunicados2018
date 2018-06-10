<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;


class SchoolStaff extends Model {

    /**
     * Generated
     */


    protected $table = 'school_staff';
    protected $primaryKey = 'dni';
    protected $fillable = ['dni', 'n_legajo', 'fecha_alta', 'estado'];


    public function user() {
        return $this->belongsTo(\Comunicados\User::class, 'dni', 'dni');
    }

    public function roles() {
        return $this->belongsToMany(\Comunicados\Role::class, 'staff_role', 'dni', 'rol_id');
    }

    public function staffRoles() {
        return $this->hasMany(\Comunicados\StaffRole::class, 'dni', 'dni');
    }

    public function staffSchoolCourses() {
        return $this->hasMany(\Comunicados\StaffSchoolCourse::class, 'dni', 'dni');
    }

    public function subjects() {
        return $this->hasMany(\Comunicados\Subject::class, 'profesor', 'dni');
    }


}
