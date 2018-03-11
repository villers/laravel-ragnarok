<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MercenaryOwner
 *
 * @property int $char_id
 * @property int $merc_id
 * @property int $arch_calls
 * @property int $arch_faith
 * @property int $spear_calls
 * @property int $spear_faith
 * @property int $sword_calls
 * @property int $sword_faith
 *
 * @package App\Models
 */
class MercenaryOwner extends Eloquent
{
    protected $table = 'mercenary_owner';
    protected $primaryKey = 'char_id';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'char_id' => 'int',
        'merc_id' => 'int',
        'arch_calls' => 'int',
        'arch_faith' => 'int',
        'spear_calls' => 'int',
        'spear_faith' => 'int',
        'sword_calls' => 'int',
        'sword_faith' => 'int'
    ];

    protected $fillable = [
        'merc_id',
        'arch_calls',
        'arch_faith',
        'spear_calls',
        'spear_faith',
        'sword_calls',
        'sword_faith'
    ];
}
