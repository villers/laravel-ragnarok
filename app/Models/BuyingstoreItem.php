<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class BuyingstoreItem
 *
 * @property int $buyingstore_id
 * @property int $index
 * @property int $item_id
 * @property int $amount
 * @property int $price
 *
 * @package App\Models
 */
class BuyingstoreItem extends Eloquent
{
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'buyingstore_id' => 'int',
        'index' => 'int',
        'item_id' => 'int',
        'amount' => 'int',
        'price' => 'int'
    ];

    protected $fillable = [
        'buyingstore_id',
        'index',
        'item_id',
        'amount',
        'price'
    ];
}
