<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Interlog
 *
 * @property \Carbon\Carbon $time
 * @property string $log
 *
 * @package App\Models
 */
class Interlog extends Eloquent
{
    protected $table = 'interlog';
    public $incrementing = false;
    public $timestamps = false;

    protected $dates = [
        'time'
    ];

    protected $fillable = [
        'time',
        'log'
    ];
}
