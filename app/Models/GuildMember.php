<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GuildMember
 * 
 * @property int $guild_id
 * @property int $account_id
 * @property int $char_id
 * @property int $hair
 * @property int $hair_color
 * @property int $gender
 * @property int $class
 * @property int $lv
 * @property int $exp
 * @property int $exp_payper
 * @property int $online
 * @property int $position
 * @property string $name
 *
 * @package App\Models
 */
class GuildMember extends Eloquent
{
	protected $table = 'guild_member';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guild_id' => 'int',
		'account_id' => 'int',
		'char_id' => 'int',
		'hair' => 'int',
		'hair_color' => 'int',
		'gender' => 'int',
		'class' => 'int',
		'lv' => 'int',
		'exp' => 'int',
		'exp_payper' => 'int',
		'online' => 'int',
		'position' => 'int'
	];

	protected $fillable = [
		'account_id',
		'hair',
		'hair_color',
		'gender',
		'class',
		'lv',
		'exp',
		'exp_payper',
		'online',
		'position',
		'name'
	];
}
