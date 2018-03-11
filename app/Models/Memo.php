<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Memo
 *
 * @property int $memo_id
 * @property int $char_id
 * @property string $map
 * @property int $x
 * @property int $y
 *
 * @package App\Models
 */
class Memo extends Eloquent
{
    protected $table = 'memo';
    protected $primaryKey = 'memo_id';
    public $timestamps = false;

    protected $casts = [
        'char_id' => 'int',
        'x' => 'int',
        'y' => 'int'
    ];

    protected $fillable = [
        'char_id',
        'map',
        'x',
        'y'
    ];
}
