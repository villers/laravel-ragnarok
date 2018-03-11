<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Mail
 *
 * @property int $id
 * @property string $send_name
 * @property int $send_id
 * @property string $dest_name
 * @property int $dest_id
 * @property string $title
 * @property string $message
 * @property int $time
 * @property int $status
 * @property int $zeny
 * @property int $nameid
 * @property int $amount
 * @property int $refine
 * @property int $attribute
 * @property int $identify
 * @property int $card0
 * @property int $card1
 * @property int $card2
 * @property int $card3
 * @property int $option_id0
 * @property int $option_val0
 * @property int $option_parm0
 * @property int $option_id1
 * @property int $option_val1
 * @property int $option_parm1
 * @property int $option_id2
 * @property int $option_val2
 * @property int $option_parm2
 * @property int $option_id3
 * @property int $option_val3
 * @property int $option_parm3
 * @property int $option_id4
 * @property int $option_val4
 * @property int $option_parm4
 * @property int $unique_id
 * @property bool $bound
 *
 * @package App\Models
 */
class Mail extends Eloquent
{
    protected $table = 'mail';
    public $timestamps = false;

    protected $casts = [
        'send_id' => 'int',
        'dest_id' => 'int',
        'time' => 'int',
        'status' => 'int',
        'zeny' => 'int',
        'nameid' => 'int',
        'amount' => 'int',
        'refine' => 'int',
        'attribute' => 'int',
        'identify' => 'int',
        'card0' => 'int',
        'card1' => 'int',
        'card2' => 'int',
        'card3' => 'int',
        'option_id0' => 'int',
        'option_val0' => 'int',
        'option_parm0' => 'int',
        'option_id1' => 'int',
        'option_val1' => 'int',
        'option_parm1' => 'int',
        'option_id2' => 'int',
        'option_val2' => 'int',
        'option_parm2' => 'int',
        'option_id3' => 'int',
        'option_val3' => 'int',
        'option_parm3' => 'int',
        'option_id4' => 'int',
        'option_val4' => 'int',
        'option_parm4' => 'int',
        'unique_id' => 'int',
        'bound' => 'bool'
    ];

    protected $fillable = [
        'send_name',
        'send_id',
        'dest_name',
        'dest_id',
        'title',
        'message',
        'time',
        'status',
        'zeny',
        'nameid',
        'amount',
        'refine',
        'attribute',
        'identify',
        'card0',
        'card1',
        'card2',
        'card3',
        'option_id0',
        'option_val0',
        'option_parm0',
        'option_id1',
        'option_val1',
        'option_parm1',
        'option_id2',
        'option_val2',
        'option_parm2',
        'option_id3',
        'option_val3',
        'option_parm3',
        'option_id4',
        'option_val4',
        'option_parm4',
        'unique_id',
        'bound'
    ];
}
