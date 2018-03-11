<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Skill
 *
 * @property int $char_id
 * @property int $id
 * @property int $lv
 * @property bool $flag
 *
 * @package App\Models
 */
class Skill extends Eloquent
{
    protected $table = 'skill';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'char_id' => 'int',
        'id' => 'int',
        'lv' => 'int',
        'flag' => 'bool'
    ];

    protected $fillable = [
        'lv',
        'flag'
    ];
}
