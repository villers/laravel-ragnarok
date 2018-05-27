<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Inventory
 *
 * @property int $tab
 * @property int $item_id
 * @property int $price
 *
 * @package App\Models
 */
class ItemCashDb extends Eloquent
{
    protected $table = 'item_cash_db';
    public $timestamps = false;

    protected $casts = [
        'tab' => 'int',
        'item_id' => 'int',
        'price' => 'int'
    ];

    protected $fillable = [
        'tab',
        'item_id',
        'price',
    ];

    public function item()
    {
        return $this->hasOne(ItemDb::class, 'id', 'item_id');
    }
}
