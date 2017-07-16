<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SiteOnlinepeak
 * 
 * @property int $id
 * @property int $players
 *
 * @package App\Models
 */
class SiteOnlinepeak extends Eloquent
{
	protected $table = 'site_onlinepeak';
	public $timestamps = false;

	protected $casts = [
		'players' => 'int'
	];

	protected $fillable = [
		'players'
	];
}
