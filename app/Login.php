<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Login extends Authenticatable
{
    use Notifiable;

    protected $table = 'login';
    protected $primaryKey = 'account_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userid', 'user_pass', 'email',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_pass',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['user_pass'] = md5($value);
    }

    public function getAuthPassword()
    {
        return $this->user_pass;
    }

    public function getAuthIdentifierName()
    {
        return 'userid';
    }
}
