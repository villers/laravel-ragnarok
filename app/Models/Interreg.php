<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Interreg
 * 
 * @property string $varname
 * @property string $value
 *
 * @package App\Models
 */
class Interreg extends Eloquent
{
	protected $table = 'interreg';
	protected $primaryKey = 'varname';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'value'
	];
}
