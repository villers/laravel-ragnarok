<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Ipbanlist
 * 
 * @property string $list
 * @property \Carbon\Carbon $btime
 * @property \Carbon\Carbon $rtime
 * @property string $reason
 *
 * @package App\Models
 */
class Ipbanlist extends Eloquent
{
	protected $table = 'ipbanlist';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'btime',
		'rtime'
	];

	protected $fillable = [
		'list',
		'btime',
		'rtime',
		'reason'
	];
}
