<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class StaffRole extends Model {

    /**
     * Generated
     */

    protected $table = 'staff_role';
    protected $fillable = ['dni', 'rol_id'];


    public function schoolStaff() {
        return $this->belongsTo(\Comunicados\SchoolStaff::class, 'dni', 'dni');
    }

    public function role() {
        return $this->belongsTo(\Comunicados\Role::class, 'rol_id', 'id');
    }


}
