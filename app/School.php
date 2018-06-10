<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class School extends Model {

    /**
     * Generated
     */

    protected $table = 'schools';
    protected $fillable = ['id', 'modalidad', 'nivel', 'numero', 'nombre', 'direccion', 'localidad', 'provincia', 'telefono', 'fax', 'email', 'pagina_web'];


    public function messages() {
        return $this->hasMany(\Comunicados\Message::class, 'escuela_id', 'id');
    }

    public function securityAdmins() {
        return $this->hasMany(\Comunicados\SecurityAdmin::class, 'escuela_id', 'id');
    }

    public function staffSchoolCourses() {
        return $this->hasMany(\Comunicados\StaffSchoolCourse::class, 'escuela_id', 'id');
    }

    public function subjects() {
        return $this->hasMany(\Comunicados\Subject::class, 'escuela_id', 'id');
    }


}
