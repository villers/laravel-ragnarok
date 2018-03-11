<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Charlog
 *
 * @property \Carbon\Carbon $time
 * @property string $char_msg
 * @property int $account_id
 * @property int $char_num
 * @property string $name
 * @property int $str
 * @property int $agi
 * @property int $vit
 * @property int $int
 * @property int $dex
 * @property int $luk
 * @property int $hair
 * @property int $hair_color
 *
 * @package App\Models
 */
class Charlog extends Eloquent
{
    protected $table = 'charlog';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'account_id' => 'int',
        'char_num' => 'int',
        'str' => 'int',
        'agi' => 'int',
        'vit' => 'int',
        'int' => 'int',
        'dex' => 'int',
        'luk' => 'int',
        'hair' => 'int',
        'hair_color' => 'int'
    ];

    protected $dates = [
        'time'
    ];

    protected $fillable = [
        'time',
        'char_msg',
        'account_id',
        'char_num',
        'name',
        'str',
        'agi',
        'vit',
        'int',
        'dex',
        'luk',
        'hair',
        'hair_color'
    ];
}
