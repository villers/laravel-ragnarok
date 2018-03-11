<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Clan
 *
 * @property int $clan_id
 * @property string $name
 * @property string $master
 * @property string $mapname
 * @property int $max_member
 *
 * @package App\Models
 */
class Clan extends Eloquent
{
    protected $table = 'clan';
    protected $primaryKey = 'clan_id';
    public $timestamps = false;

    protected $casts = [
        'max_member' => 'int'
    ];

    protected $fillable = [
        'name',
        'master',
        'mapname',
        'max_member'
    ];
}
