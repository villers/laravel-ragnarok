<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Market
 * 
 * @property string $name
 * @property int $nameid
 * @property int $price
 * @property int $amount
 * @property int $flag
 *
 * @package App\Models
 */
class Market extends Eloquent
{
	protected $table = 'market';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'nameid' => 'int',
		'price' => 'int',
		'amount' => 'int',
		'flag' => 'int'
	];

	protected $fillable = [
		'price',
		'amount',
		'flag'
	];
}
