<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Char
 * 
 * @property int $char_id
 * @property int $account_id
 * @property bool $char_num
 * @property string $name
 * @property int $class
 * @property int $base_level
 * @property int $job_level
 * @property int $base_exp
 * @property int $job_exp
 * @property int $zeny
 * @property int $str
 * @property int $agi
 * @property int $vit
 * @property int $int
 * @property int $dex
 * @property int $luk
 * @property int $max_hp
 * @property int $hp
 * @property int $max_sp
 * @property int $sp
 * @property int $status_point
 * @property int $skill_point
 * @property int $option
 * @property int $karma
 * @property int $manner
 * @property int $party_id
 * @property int $guild_id
 * @property int $pet_id
 * @property int $homun_id
 * @property int $elemental_id
 * @property int $hair
 * @property int $hair_color
 * @property int $clothes_color
 * @property int $body
 * @property int $weapon
 * @property int $shield
 * @property int $head_top
 * @property int $head_mid
 * @property int $head_bottom
 * @property int $robe
 * @property string $last_map
 * @property int $last_x
 * @property int $last_y
 * @property string $save_map
 * @property int $save_x
 * @property int $save_y
 * @property int $partner_id
 * @property int $online
 * @property int $father
 * @property int $mother
 * @property int $child
 * @property int $fame
 * @property int $rename
 * @property int $delete_date
 * @property int $moves
 * @property int $unban_time
 * @property int $font
 * @property int $uniqueitem_counter
 * @property string $sex
 * @property int $hotkey_rowshift
 * @property int $clan_id
 *
 * @package App\Models
 */
class Char extends Eloquent
{
	protected $table = 'char';
	protected $primaryKey = 'char_id';
	public $timestamps = false;

	protected $casts = [
		'account_id' => 'int',
		'char_num' => 'bool',
		'class' => 'int',
		'base_level' => 'int',
		'job_level' => 'int',
		'base_exp' => 'int',
		'job_exp' => 'int',
		'zeny' => 'int',
		'str' => 'int',
		'agi' => 'int',
		'vit' => 'int',
		'int' => 'int',
		'dex' => 'int',
		'luk' => 'int',
		'max_hp' => 'int',
		'hp' => 'int',
		'max_sp' => 'int',
		'sp' => 'int',
		'status_point' => 'int',
		'skill_point' => 'int',
		'option' => 'int',
		'karma' => 'int',
		'manner' => 'int',
		'party_id' => 'int',
		'guild_id' => 'int',
		'pet_id' => 'int',
		'homun_id' => 'int',
		'elemental_id' => 'int',
		'hair' => 'int',
		'hair_color' => 'int',
		'clothes_color' => 'int',
		'body' => 'int',
		'weapon' => 'int',
		'shield' => 'int',
		'head_top' => 'int',
		'head_mid' => 'int',
		'head_bottom' => 'int',
		'robe' => 'int',
		'last_x' => 'int',
		'last_y' => 'int',
		'save_x' => 'int',
		'save_y' => 'int',
		'partner_id' => 'int',
		'online' => 'int',
		'father' => 'int',
		'mother' => 'int',
		'child' => 'int',
		'fame' => 'int',
		'rename' => 'int',
		'delete_date' => 'int',
		'moves' => 'int',
		'unban_time' => 'int',
		'font' => 'int',
		'uniqueitem_counter' => 'int',
		'hotkey_rowshift' => 'int',
		'clan_id' => 'int'
	];

	protected $fillable = [
		'account_id',
		'char_num',
		'name',
		'class',
		'base_level',
		'job_level',
		'base_exp',
		'job_exp',
		'zeny',
		'str',
		'agi',
		'vit',
		'int',
		'dex',
		'luk',
		'max_hp',
		'hp',
		'max_sp',
		'sp',
		'status_point',
		'skill_point',
		'option',
		'karma',
		'manner',
		'party_id',
		'guild_id',
		'pet_id',
		'homun_id',
		'elemental_id',
		'hair',
		'hair_color',
		'clothes_color',
		'body',
		'weapon',
		'shield',
		'head_top',
		'head_mid',
		'head_bottom',
		'robe',
		'last_map',
		'last_x',
		'last_y',
		'save_map',
		'save_x',
		'save_y',
		'partner_id',
		'online',
		'father',
		'mother',
		'child',
		'fame',
		'rename',
		'delete_date',
		'moves',
		'unban_time',
		'font',
		'uniqueitem_counter',
		'sex',
		'hotkey_rowshift',
		'clan_id'
	];

    public function guild()
    {
        return $this->belongsTo('App\Models\Guild', 'guild_id', 'guild_id');
    }

}
