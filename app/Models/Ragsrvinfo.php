<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Ragsrvinfo
 * 
 * @property int $index
 * @property string $name
 * @property int $exp
 * @property int $jexp
 * @property int $drop
 *
 * @package App\Models
 */
class Ragsrvinfo extends Eloquent
{
	protected $table = 'ragsrvinfo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'index' => 'int',
		'exp' => 'int',
		'jexp' => 'int',
		'drop' => 'int'
	];

	protected $fillable = [
		'index',
		'name',
		'exp',
		'jexp',
		'drop'
	];
}
