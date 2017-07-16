<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Pet
 * 
 * @property int $pet_id
 * @property int $class
 * @property string $name
 * @property int $account_id
 * @property int $char_id
 * @property int $level
 * @property int $egg_id
 * @property int $equip
 * @property int $intimate
 * @property int $hungry
 * @property int $rename_flag
 * @property int $incubate
 *
 * @package App\Models
 */
class Pet extends Eloquent
{
	protected $table = 'pet';
	protected $primaryKey = 'pet_id';
	public $timestamps = false;

	protected $casts = [
		'class' => 'int',
		'account_id' => 'int',
		'char_id' => 'int',
		'level' => 'int',
		'egg_id' => 'int',
		'equip' => 'int',
		'intimate' => 'int',
		'hungry' => 'int',
		'rename_flag' => 'int',
		'incubate' => 'int'
	];

	protected $fillable = [
		'class',
		'name',
		'account_id',
		'char_id',
		'level',
		'egg_id',
		'equip',
		'intimate',
		'hungry',
		'rename_flag',
		'incubate'
	];
}
