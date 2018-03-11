<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Hotkey
 *
 * @property int $char_id
 * @property int $hotkey
 * @property bool $type
 * @property int $itemskill_id
 * @property int $skill_lvl
 *
 * @package App\Models
 */
class Hotkey extends Eloquent
{
    protected $table = 'hotkey';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'char_id' => 'int',
        'hotkey' => 'int',
        'type' => 'bool',
        'itemskill_id' => 'int',
        'skill_lvl' => 'int'
    ];

    protected $fillable = [
        'type',
        'itemskill_id',
        'skill_lvl'
    ];
}
