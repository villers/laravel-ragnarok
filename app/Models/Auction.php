<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Auction
 *
 * @property int $auction_id
 * @property int $seller_id
 * @property string $seller_name
 * @property int $buyer_id
 * @property string $buyer_name
 * @property int $price
 * @property int $buynow
 * @property int $hours
 * @property int $timestamp
 * @property int $nameid
 * @property string $item_name
 * @property int $type
 * @property int $refine
 * @property int $attribute
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
 *
 * @package App\Models
 */
class Auction extends Eloquent
{
    protected $table = 'auction';
    protected $primaryKey = 'auction_id';
    public $timestamps = false;

    protected $casts = [
        'seller_id' => 'int',
        'buyer_id' => 'int',
        'price' => 'int',
        'buynow' => 'int',
        'hours' => 'int',
        'timestamp' => 'int',
        'nameid' => 'int',
        'type' => 'int',
        'refine' => 'int',
        'attribute' => 'int',
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
        'unique_id' => 'int'
    ];

    protected $fillable = [
        'seller_id',
        'seller_name',
        'buyer_id',
        'buyer_name',
        'price',
        'buynow',
        'hours',
        'timestamp',
        'nameid',
        'item_name',
        'type',
        'refine',
        'attribute',
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
        'unique_id'
    ];
}
