<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

    /**
     * Generated
     */

    protected $table = 'roles';
    protected $fillable = ['id', 'cargo', 'crea_dni'];


    public function schoolStaffs() {
        return $this->belongsToMany(\Comunicados\SchoolStaff::class, 'staff_role', 'rol_id', 'dni');
    }

    public function rolePermissions() {
        return $this->hasMany(\Comunicados\RolePermission::class, 'id_rol', 'id');
    }

    public function staffRoles() {
        return $this->hasMany(\Comunicados\StaffRole::class, 'rol_id', 'id');
    }


}
