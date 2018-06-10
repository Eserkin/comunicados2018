<?php 

namespace Comunicados;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable {

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = ['dni', 'email', 'password','remember_token'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function messages() {
        return $this->belongsToMany(\Comunicados\Message::class, 'message_recipient', 'recibe_dni', 'mensaje_id');
    }

    public function messageRecipients() {
        return $this->hasMany(\Comunicados\MessageRecipient::class, 'recibe_dni', 'dni');
    }

    public function messages02() {
        return $this->hasMany(\Comunicados\Message::class, 'user_envia', 'dni');
    }

    public function parent() {
        return $this->hasOne(\Comunicados\Parent::class, 'dni', 'dni');
    }

    public function schoolStaff() {
        return $this->hasOne(\Comunicados\SchoolStaff::class, 'dni', 'dni');
    }

    public function student() {
        return $this->hasOne(\Comunicados\Student::class, 'dni', 'dni');
    }

    public function admin() {
        return $this->hasOne(\Comunicados\SecurityAdmin::class, 'dni', 'dni');
    }

}
