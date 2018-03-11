<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SkillHomunculus
 *
 * @property int $homun_id
 * @property int $id
 * @property int $lv
 *
 * @package App\Models
 */
class SkillHomunculus extends Eloquent
{
    protected $table = 'skill_homunculus';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'homun_id' => 'int',
        'id' => 'int',
        'lv' => 'int'
    ];

    protected $fillable = [
        'lv'
    ];
}
