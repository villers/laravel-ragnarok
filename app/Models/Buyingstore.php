<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Buyingstore
 *
 * @property int $id
 * @property int $account_id
 * @property int $char_id
 * @property string $sex
 * @property string $map
 * @property int $x
 * @property int $y
 * @property string $title
 * @property int $limit
 * @property string $body_direction
 * @property string $head_direction
 * @property string $sit
 * @property int $autotrade
 *
 * @package App\Models
 */
class Buyingstore extends Eloquent
{
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'id' => 'int',
        'account_id' => 'int',
        'char_id' => 'int',
        'x' => 'int',
        'y' => 'int',
        'limit' => 'int',
        'autotrade' => 'int'
    ];

    protected $fillable = [
        'account_id',
        'char_id',
        'sex',
        'map',
        'x',
        'y',
        'title',
        'limit',
        'body_direction',
        'head_direction',
        'sit',
        'autotrade'
    ];
}
