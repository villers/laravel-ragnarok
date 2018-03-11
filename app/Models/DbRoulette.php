<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DbRoulette
 *
 * @property int $index
 * @property int $level
 * @property int $item_id
 * @property int $amount
 * @property int $flag
 *
 * @package App\Models
 */
class DbRoulette extends Eloquent
{
    protected $table = 'db_roulette';
    protected $primaryKey = 'index';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'index' => 'int',
        'level' => 'int',
        'item_id' => 'int',
        'amount' => 'int',
        'flag' => 'int'
    ];

    protected $fillable = [
        'level',
        'item_id',
        'amount',
        'flag'
    ];
}
