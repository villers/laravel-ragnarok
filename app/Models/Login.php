<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class Login
 * 
 * @property int $account_id
 * @property string $userid
 * @property string $user_pass
 * @property string $sex
 * @property string $email
 * @property int $group_id
 * @property int $state
 * @property int $unban_time
 * @property int $expiration_time
 * @property int $logincount
 * @property \Carbon\Carbon $lastlogin
 * @property string $last_ip
 * @property \Carbon\Carbon $birthdate
 * @property int $character_slots
 * @property string $pincode
 * @property int $pincode_change
 * @property int $vip_time
 * @property int $old_group
 *
 * @package App\Models
 */
class Login extends Authenticatable
{
    use Notifiable;

    protected $table = 'login';
	protected $primaryKey = 'account_id';
	public $timestamps = false;

	protected $casts = [
		'group_id' => 'int',
		'state' => 'int',
		'unban_time' => 'int',
		'expiration_time' => 'int',
		'logincount' => 'int',
		'character_slots' => 'int',
		'pincode_change' => 'int',
		'vip_time' => 'int',
		'old_group' => 'int'
	];

	protected $dates = [
		'lastlogin',
		'birthdate'
	];

	protected $hidden = [
		'user_pass'
	];

	protected $fillable = [
		'userid',
		'user_pass',
		'sex',
		'email',
		'group_id',
		'state',
		'unban_time',
		'expiration_time',
		'logincount',
		'lastlogin',
		'last_ip',
		'birthdate',
		'character_slots',
		'pincode',
		'pincode_change',
		'vip_time',
		'old_group'
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

    public function isAdmin() {

        return $this->group_id === 99;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function char()
    {
        return $this->hasMany(Char::class, 'char_id', 'char_id');
    }
}
