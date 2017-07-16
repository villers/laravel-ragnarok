<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Homunculus
 * 
 * @property int $homun_id
 * @property int $char_id
 * @property int $class
 * @property int $prev_class
 * @property string $name
 * @property int $level
 * @property int $exp
 * @property int $intimacy
 * @property int $hunger
 * @property int $str
 * @property int $agi
 * @property int $vit
 * @property int $int
 * @property int $dex
 * @property int $luk
 * @property int $hp
 * @property int $max_hp
 * @property int $sp
 * @property int $max_sp
 * @property int $skill_point
 * @property int $alive
 * @property int $rename_flag
 * @property int $vaporize
 *
 * @package App\Models
 */
class Homunculus extends Eloquent
{
	protected $table = 'homunculus';
	protected $primaryKey = 'homun_id';
	public $timestamps = false;

	protected $casts = [
		'char_id' => 'int',
		'class' => 'int',
		'prev_class' => 'int',
		'level' => 'int',
		'exp' => 'int',
		'intimacy' => 'int',
		'hunger' => 'int',
		'str' => 'int',
		'agi' => 'int',
		'vit' => 'int',
		'int' => 'int',
		'dex' => 'int',
		'luk' => 'int',
		'hp' => 'int',
		'max_hp' => 'int',
		'sp' => 'int',
		'max_sp' => 'int',
		'skill_point' => 'int',
		'alive' => 'int',
		'rename_flag' => 'int',
		'vaporize' => 'int'
	];

	protected $fillable = [
		'char_id',
		'class',
		'prev_class',
		'name',
		'level',
		'exp',
		'intimacy',
		'hunger',
		'str',
		'agi',
		'vit',
		'int',
		'dex',
		'luk',
		'hp',
		'max_hp',
		'sp',
		'max_sp',
		'skill_point',
		'alive',
		'rename_flag',
		'vaporize'
	];
}
