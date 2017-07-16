<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PvpRank
 * 
 * @property int $char_id
 * @property int $account_id
 * @property string $char
 * @property int $kill
 * @property int $death
 * @property string $kdr
 * @property int $killingstreak
 * @property int $multikill
 * @property int $killingspree
 * @property int $dominating
 * @property int $megakill
 * @property int $unstoppable
 * @property int $wickedsick
 * @property int $monsterkill
 * @property int $godlike
 * @property int $beyondgodlike
 * @property int $doublekill
 * @property int $triplekill
 * @property int $ultrakill
 * @property int $rampage
 * @property int $ownage
 * @property int $nemesiskill
 * @property int $feedcount
 *
 * @package App\Models
 */
class PvpRank extends Eloquent
{
	protected $table = 'pvp_rank';
	protected $primaryKey = 'char_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'char_id' => 'int',
		'account_id' => 'int',
		'kill' => 'int',
		'death' => 'int',
		'killingstreak' => 'int',
		'multikill' => 'int',
		'killingspree' => 'int',
		'dominating' => 'int',
		'megakill' => 'int',
		'unstoppable' => 'int',
		'wickedsick' => 'int',
		'monsterkill' => 'int',
		'godlike' => 'int',
		'beyondgodlike' => 'int',
		'doublekill' => 'int',
		'triplekill' => 'int',
		'ultrakill' => 'int',
		'rampage' => 'int',
		'ownage' => 'int',
		'nemesiskill' => 'int',
		'feedcount' => 'int'
	];

	protected $fillable = [
		'account_id',
		'char',
		'kill',
		'death',
		'kdr',
		'killingstreak',
		'multikill',
		'killingspree',
		'dominating',
		'megakill',
		'unstoppable',
		'wickedsick',
		'monsterkill',
		'godlike',
		'beyondgodlike',
		'doublekill',
		'triplekill',
		'ultrakill',
		'rampage',
		'ownage',
		'nemesiskill',
		'feedcount'
	];
}
