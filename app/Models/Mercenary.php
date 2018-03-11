<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Mercenary
 *
 * @property int $mer_id
 * @property int $char_id
 * @property int $class
 * @property int $hp
 * @property int $sp
 * @property int $kill_counter
 * @property int $life_time
 *
 * @package App\Models
 */
class Mercenary extends Eloquent
{
    protected $table = 'mercenary';
    protected $primaryKey = 'mer_id';
    public $timestamps = false;

    protected $casts = [
        'char_id' => 'int',
        'class' => 'int',
        'hp' => 'int',
        'sp' => 'int',
        'kill_counter' => 'int',
        'life_time' => 'int'
    ];

    protected $fillable = [
        'char_id',
        'class',
        'hp',
        'sp',
        'kill_counter',
        'life_time'
    ];
}
