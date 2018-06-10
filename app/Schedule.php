<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model {

    /**
     * Generated
     */

    protected $table = 'schedules';
    protected $fillable = ['id', 'descripcion', 'hora_inicio', 'hora_fin'];


    public function courses() {
        return $this->hasMany(\Comunicados\Course::class, 'turno_id', 'id');
    }


}
