<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GuildSkill
 *
 * @property int $guild_id
 * @property int $id
 * @property int $lv
 *
 * @package App\Models
 */
class GuildSkill extends Eloquent
{
    protected $table = 'guild_skill';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'guild_id' => 'int',
        'id' => 'int',
        'lv' => 'int'
    ];

    protected $fillable = [
        'lv'
    ];
}
