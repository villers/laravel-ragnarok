<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GlobalAccRegNum
 * 
 * @property int $account_id
 * @property string $key
 * @property int $index
 * @property int $value
 *
 * @package App\Models
 */
class GlobalAccRegNum extends Eloquent
{
	protected $table = 'global_acc_reg_num';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'account_id' => 'int',
		'index' => 'int',
		'value' => 'int'
	];

	protected $fillable = [
		'value'
	];
}
