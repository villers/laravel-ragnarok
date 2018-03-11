<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Mapreg
 *
 * @property string $varname
 * @property int $index
 * @property string $value
 *
 * @package App\Models
 */
class Mapreg extends Eloquent
{
    protected $table = 'mapreg';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'index' => 'int'
    ];

    protected $fillable = [
        'value'
    ];
}
