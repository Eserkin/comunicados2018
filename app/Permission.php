<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model {

    /**
     * Generated
     */

    protected $table = 'permissions';
    protected $fillable = ['id', 'nombre', 'descripcion'];


    public function rolePermissions() {
        return $this->hasMany(\Comunicados\RolePermission::class, 'id_permiso', 'id');
    }


}
