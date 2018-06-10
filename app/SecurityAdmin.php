<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class SecurityAdmin extends Model {

    /**
     * Generated
     */

    protected $table = 'security_admins';
    protected $primaryKey = 'dni';
    protected $fillable = ['dni', 'nombre', 'apellido', 'email', 'telefono', 'escuela_id'];


    public function school() {
        return $this->belongsTo(\Comunicados\School::class, 'escuela_id', 'id');
    }

    public function rolePermissions() {
        return $this->hasMany(\Comunicados\RolePermission::class, 'admin_asigna', 'dni');
    }

    public function user() {
        return $this->belongsTo(\Comunicados\User::class, 'dni', 'dni');
    }


}
