<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Storage
 *
 * @property int $id
 * @property int $account_id
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
 * @property int $bound
 * @property int $unique_id
 *
 * @package App\Models
 */
class Storage extends Eloquent
{
    protected $table = 'storage';
    public $timestamps = false;

    protected $casts = [
        'account_id' => 'int',
        'nameid' => 'int',
        'amount' => 'int',
        'equip' => 'int',
        'identify' => 'int',
        'refine' => 'int',
        'attribute' => 'int',
        'card0' => 'int',
        'card1' => 'int',
        'card2' => 'int',
        'card3' => 'int',
        'option_id0' => 'int',
        'option_val0' => 'int',
        'option_parm0' => 'int',
        'option_id1' => 'int',
        'option_val1' => 'int',
        'option_parm1' => 'int',
        'option_id2' => 'int',
        'option_val2' => 'int',
        'option_parm2' => 'int',
        'option_id3' => 'int',
        'option_val3' => 'int',
        'option_parm3' => 'int',
        'option_id4' => 'int',
        'option_val4' => 'int',
        'option_parm4' => 'int',
        'expire_time' => 'int',
        'bound' => 'int',
        'unique_id' => 'int'
    ];

    protected $fillable = [
        'account_id',
        'nameid',
        'amount',
        'equip',
        'identify',
        'refine',
        'attribute',
        'card0',
        'card1',
        'card2',
        'card3',
        'option_id0',
        'option_val0',
        'option_parm0',
        'option_id1',
        'option_val1',
        'option_parm1',
        'option_id2',
        'option_val2',
        'option_parm2',
        'option_id3',
        'option_val3',
        'option_parm3',
        'option_id4',
        'option_val4',
        'option_parm4',
        'expire_time',
        'bound',
        'unique_id'
    ];
}
