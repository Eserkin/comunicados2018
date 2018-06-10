<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class Parent extends Model {

    /**
     * Generated
     */

    protected $table = 'parents';
    protected $fillable = ['dni', 'llave_publica'];


    public function user() {
        return $this->belongsTo(\Comunicados\User::class, 'dni', 'dni');
    }

    public function students() {
        return $this->belongsToMany(\Comunicados\Student::class, 'student_parent', 'padre_id', 'alumno_id');
    }

    public function studentParents() {
        return $this->hasMany(\Comunicados\StudentParent::class, 'padre_id', 'dni');
    }


}
