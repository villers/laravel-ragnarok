<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ClanAlliance
 * 
 * @property int $clan_id
 * @property int $opposition
 * @property int $alliance_id
 * @property string $name
 *
 * @package App\Models
 */
class ClanAlliance extends Eloquent
{
	protected $table = 'clan_alliance';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'clan_id' => 'int',
		'opposition' => 'int',
		'alliance_id' => 'int'
	];

	protected $fillable = [
		'opposition',
		'name'
	];
}
