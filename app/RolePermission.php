<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model {

    /**
     * Generated
     */

    protected $table = 'role_permission';
    protected $fillable = ['id_rol', 'id_permiso', 'admin_asigna', 'consultar', 'agregar', 'editar', 'eliminar'];


    public function role() {
        return $this->belongsTo(\Comunicados\Role::class, 'id_rol', 'id');
    }

    public function permission() {
        return $this->belongsTo(\Comunicados\Permission::class, 'id_permiso', 'id');
    }

    public function securityAdmin() {
        return $this->belongsTo(\Comunicados\SecurityAdmin::class, 'admin_asigna', 'dni');
    }


}
