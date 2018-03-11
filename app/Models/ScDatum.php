<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ScDatum
 *
 * @property int $account_id
 * @property int $char_id
 * @property int $type
 * @property int $tick
 * @property int $val1
 * @property int $val2
 * @property int $val3
 * @property int $val4
 *
 * @package App\Models
 */
class ScDatum extends Eloquent
{
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'account_id' => 'int',
        'char_id' => 'int',
        'type' => 'int',
        'tick' => 'int',
        'val1' => 'int',
        'val2' => 'int',
        'val3' => 'int',
        'val4' => 'int'
    ];

    protected $fillable = [
        'account_id',
        'char_id',
        'type',
        'tick',
        'val1',
        'val2',
        'val3',
        'val4'
    ];
}
