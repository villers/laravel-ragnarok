<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GuildExpulsion
 * 
 * @property int $guild_id
 * @property int $account_id
 * @property string $name
 * @property string $mes
 *
 * @package App\Models
 */
class GuildExpulsion extends Eloquent
{
	protected $table = 'guild_expulsion';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guild_id' => 'int',
		'account_id' => 'int'
	];

	protected $fillable = [
		'account_id',
		'mes'
	];
}
