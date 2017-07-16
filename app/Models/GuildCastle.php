<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GuildCastle
 * 
 * @property int $castle_id
 * @property int $guild_id
 * @property int $economy
 * @property int $defense
 * @property int $triggerE
 * @property int $triggerD
 * @property int $nextTime
 * @property int $payTime
 * @property int $createTime
 * @property int $visibleC
 * @property int $visibleG0
 * @property int $visibleG1
 * @property int $visibleG2
 * @property int $visibleG3
 * @property int $visibleG4
 * @property int $visibleG5
 * @property int $visibleG6
 * @property int $visibleG7
 *
 * @package App\Models
 */
class GuildCastle extends Eloquent
{
	protected $table = 'guild_castle';
	protected $primaryKey = 'castle_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'castle_id' => 'int',
		'guild_id' => 'int',
		'economy' => 'int',
		'defense' => 'int',
		'triggerE' => 'int',
		'triggerD' => 'int',
		'nextTime' => 'int',
		'payTime' => 'int',
		'createTime' => 'int',
		'visibleC' => 'int',
		'visibleG0' => 'int',
		'visibleG1' => 'int',
		'visibleG2' => 'int',
		'visibleG3' => 'int',
		'visibleG4' => 'int',
		'visibleG5' => 'int',
		'visibleG6' => 'int',
		'visibleG7' => 'int'
	];

	protected $fillable = [
		'guild_id',
		'economy',
		'defense',
		'triggerE',
		'triggerD',
		'nextTime',
		'payTime',
		'createTime',
		'visibleC',
		'visibleG0',
		'visibleG1',
		'visibleG2',
		'visibleG3',
		'visibleG4',
		'visibleG5',
		'visibleG6',
		'visibleG7'
	];
}
