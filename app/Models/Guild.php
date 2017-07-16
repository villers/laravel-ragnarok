<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Guild
 * 
 * @property int $guild_id
 * @property string $name
 * @property int $char_id
 * @property string $master
 * @property int $guild_lv
 * @property int $connect_member
 * @property int $max_member
 * @property int $average_lv
 * @property int $exp
 * @property int $next_exp
 * @property int $skill_point
 * @property string $mes1
 * @property string $mes2
 * @property int $emblem_len
 * @property int $emblem_id
 * @property boolean $emblem_data
 *
 * @package App\Models
 */
class Guild extends Eloquent
{
	protected $table = 'guild';
	public $timestamps = false;

	protected $casts = [
		'char_id' => 'int',
		'guild_lv' => 'int',
		'connect_member' => 'int',
		'max_member' => 'int',
		'average_lv' => 'int',
		'exp' => 'int',
		'next_exp' => 'int',
		'skill_point' => 'int',
		'emblem_len' => 'int',
		'emblem_id' => 'int',
		'emblem_data' => 'boolean'
	];

	protected $fillable = [
		'name',
		'master',
		'guild_lv',
		'connect_member',
		'max_member',
		'average_lv',
		'exp',
		'next_exp',
		'skill_point',
		'mes1',
		'mes2',
		'emblem_len',
		'emblem_id',
		'emblem_data'
	];
}
