<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Inventory
 *
 * @property int $id
 * @property int $char_id
 * @property int $nameid
 * @property int $amount
 * @property int $equip
 * @property int $identify
 * @property int $refine
 * @property int $attribute
 * @property int $card0
 * @property int $card1
 * @property int $card2
 * @property int $card3
 * @property int $option_id0
 * @property int $option_val0
 * @property int $option_parm0
 * @property int $option_id1
 * @property int $option_val1
 * @property int $option_parm1
 * @property int $option_id2
 * @property int $option_val2
 * @property int $option_parm2
 * @property int $option_id3
 * @property int $option_val3
 * @property int $option_parm3
 * @property int $option_id4
 * @property int $option_val4
 * @property int $option_parm4
 * @property int $expire_time
 * @property int $favorite
 * @property int $bound
 * @property int $unique_id
 *
 * @package App\Models
 */
class ItemDb extends Eloquent
{
    protected $table = 'item_db';
    public $timestamps = false;

    protected $casts = [
        'id' => 'int',
        'type' => 'int',
        'price_buy' => 'int',
        'price_sell' => 'int',
        'weight' => 'int',
        'attack' => 'int',
        'defense' => 'int',
        'range' => 'int',
        'slots' => 'int',
        'equip_jobs' => 'int',
        'equip_upper' => 'int',
        'equip_genders' => 'int',
        'equip_locations' => 'int',
        'weapon_level' => 'int',
        'equip_level' => 'int',
        'refineable' => 'bool',
        'view' => 'int',
    ];

    protected $fillable = [
        'name_english',
        'name_japanese',
        'type',
        'price_buy',
        'price_sell',
        'weight',
        'attack',
        'defense',
        'range',
        'slots',
        'equip_jobs',
        'equip_upper',
        'equip_genders',
        'equip_locations',
        'weapon_level',
        'equip_level',
        'refineable',
        'view',
        'script',
        'equip_script',
        'unequip_script',
    ];
}
