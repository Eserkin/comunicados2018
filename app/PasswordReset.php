<?php namespace Comunicados;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model {

    /**
     * Generated
     */

    protected $table = 'password_resets';
    protected $fillable = ['email', 'token'];



}
