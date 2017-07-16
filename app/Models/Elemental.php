<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Elemental
 * 
 * @property int $ele_id
 * @property int $char_id
 * @property int $class
 * @property int $mode
 * @property int $hp
 * @property int $sp
 * @property int $max_hp
 * @property int $max_sp
 * @property int $atk1
 * @property int $atk2
 * @property int $matk
 * @property int $aspd
 * @property int $def
 * @property int $mdef
 * @property int $flee
 * @property int $hit
 * @property int $life_time
 *
 * @package App\Models
 */
class Elemental extends Eloquent
{
	protected $table = 'elemental';
	protected $primaryKey = 'ele_id';
	public $timestamps = false;

	protected $casts = [
		'char_id' => 'int',
		'class' => 'int',
		'mode' => 'int',
		'hp' => 'int',
		'sp' => 'int',
		'max_hp' => 'int',
		'max_sp' => 'int',
		'atk1' => 'int',
		'atk2' => 'int',
		'matk' => 'int',
		'aspd' => 'int',
		'def' => 'int',
		'mdef' => 'int',
		'flee' => 'int',
		'hit' => 'int',
		'life_time' => 'int'
	];

	protected $fillable = [
		'char_id',
		'class',
		'mode',
		'hp',
		'sp',
		'max_hp',
		'max_sp',
		'atk1',
		'atk2',
		'matk',
		'aspd',
		'def',
		'mdef',
		'flee',
		'hit',
		'life_time'
	];
}
