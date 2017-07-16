<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Quest
 * 
 * @property int $char_id
 * @property int $quest_id
 * @property string $state
 * @property int $time
 * @property int $count1
 * @property int $count2
 * @property int $count3
 *
 * @package App\Models
 */
class Quest extends Eloquent
{
	protected $table = 'quest';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'char_id' => 'int',
		'quest_id' => 'int',
		'time' => 'int',
		'count1' => 'int',
		'count2' => 'int',
		'count3' => 'int'
	];

	protected $fillable = [
		'state',
		'time',
		'count1',
		'count2',
		'count3'
	];
}
