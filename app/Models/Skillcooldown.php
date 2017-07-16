<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Skillcooldown
 * 
 * @property int $account_id
 * @property int $char_id
 * @property int $skill
 * @property int $tick
 *
 * @package App\Models
 */
class Skillcooldown extends Eloquent
{
	protected $table = 'skillcooldown';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'account_id' => 'int',
		'char_id' => 'int',
		'skill' => 'int',
		'tick' => 'int'
	];

	protected $fillable = [
		'account_id',
		'char_id',
		'skill',
		'tick'
	];
}
