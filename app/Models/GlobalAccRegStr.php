<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GlobalAccRegStr
 * 
 * @property int $account_id
 * @property string $key
 * @property int $index
 * @property string $value
 *
 * @package App\Models
 */
class GlobalAccRegStr extends Eloquent
{
	protected $table = 'global_acc_reg_str';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'account_id' => 'int',
		'index' => 'int'
	];

	protected $fillable = [
		'value'
	];
}
