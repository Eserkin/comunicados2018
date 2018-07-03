<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class StudentParent extends Model {

    /**
     * Generated
     */

    protected $table = 'student_parent';
    protected $fillable = ['alumno_id', 'padre_id', 'admin_id', 'estado'];


    public function parent() {
        return $this->belongsTo(\Comunicados\Parent::class, 'padre_id', 'dni');
    }

    public function student() {
        return $this->belongsTo(\Comunicados\Student::class, 'alumno_id', 'dni');
    }


}
