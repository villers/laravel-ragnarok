<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Sstatus
 *
 * @property int $index
 * @property string $name
 * @property int $user
 *
 * @package App\Models
 */
class Sstatus extends Eloquent
{
    protected $table = 'sstatus';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'index' => 'int',
        'user' => 'int'
    ];

    protected $fillable = [
        'index',
        'name',
        'user'
    ];
}
