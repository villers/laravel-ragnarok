<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class BonusScript
 * 
 * @property int $char_id
 * @property string $script
 * @property int $tick
 * @property int $flag
 * @property bool $type
 * @property int $icon
 *
 * @package App\Models
 */
class BonusScript extends Eloquent
{
	protected $table = 'bonus_script';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'char_id' => 'int',
		'tick' => 'int',
		'flag' => 'int',
		'type' => 'bool',
		'icon' => 'int'
	];

	protected $fillable = [
		'char_id',
		'script',
		'tick',
		'flag',
		'type',
		'icon'
	];
}
