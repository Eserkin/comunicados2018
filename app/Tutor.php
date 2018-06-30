<?php

namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $table = 'parents';
    protected $fillable = ['dni', 'tarjeta_coordenada'];


    public function user() {
        return $this->belongsTo(\Comunicados\User::class, 'dni', 'dni');
    }

    public function coordenadas() {
        return $this->belongsTo(\Comunicados\Coordenada::class,'tarjeta_coordenada','id' );
    }


    public function students() {
        return $this->belongsToMany(\Comunicados\Student::class, 'student_parent', 'padre_id', 'alumno_id');
    }

    public function studentParents() {
        return $this->hasMany(\Comunicados\StudentParent::class, 'padre_id', 'dni');
    }

}
