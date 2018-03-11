<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GuildAlliance
 *
 * @property int $guild_id
 * @property int $opposition
 * @property int $alliance_id
 * @property string $name
 *
 * @package App\Models
 */
class GuildAlliance extends Eloquent
{
    protected $table = 'guild_alliance';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'guild_id' => 'int',
        'opposition' => 'int',
        'alliance_id' => 'int'
    ];

    protected $fillable = [
        'opposition',
        'name'
    ];
}
