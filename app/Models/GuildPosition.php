<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GuildPosition
 * 
 * @property int $guild_id
 * @property int $position
 * @property string $name
 * @property int $mode
 * @property int $exp_mode
 *
 * @package App\Models
 */
class GuildPosition extends Eloquent
{
	protected $table = 'guild_position';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guild_id' => 'int',
		'position' => 'int',
		'mode' => 'int',
		'exp_mode' => 'int'
	];

	protected $fillable = [
		'name',
		'mode',
		'exp_mode'
	];
}
