<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Friend
 * 
 * @property int $char_id
 * @property int $friend_account
 * @property int $friend_id
 *
 * @package App\Models
 */
class Friend extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'char_id' => 'int',
		'friend_account' => 'int',
		'friend_id' => 'int'
	];

	protected $fillable = [
		'char_id',
		'friend_account',
		'friend_id'
	];
}
