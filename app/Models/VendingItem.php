<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jul 2017 01:34:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class VendingItem
 *
 * @property int $vending_id
 * @property int $index
 * @property int $cartinventory_id
 * @property int $amount
 * @property int $price
 *
 * @package App\Models
 */
class VendingItem extends Eloquent
{
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'vending_id' => 'int',
        'index' => 'int',
        'cartinventory_id' => 'int',
        'amount' => 'int',
        'price' => 'int'
    ];

    protected $fillable = [
        'vending_id',
        'index',
        'cartinventory_id',
        'amount',
        'price'
    ];

    public function cartInventory()
    {
        return $this->hasOne('App\Models\CartInventory', 'id', 'cartinventory_id');
    }
}
