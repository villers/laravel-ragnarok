<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Party
 * 
 * @property int $party_id
 * @property string $name
 * @property int $exp
 * @property int $item
 * @property int $leader_id
 * @property int $leader_char
 *
 * @package App\Models
 */
class Party extends Eloquent
{
	protected $table = 'party';
	protected $primaryKey = 'party_id';
	public $timestamps = false;

	protected $casts = [
		'exp' => 'int',
		'item' => 'int',
		'leader_id' => 'int',
		'leader_char' => 'int'
	];

	protected $fillable = [
		'name',
		'exp',
		'item',
		'leader_id',
		'leader_char'
	];
}
