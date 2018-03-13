<?php

namespace App\Repositories;

use App\Models\CartInventory;

/**
 * Class CartInventoryRepositoryEloquent
 * @package App\Repositories
 */
class CartInventoryRepositoryEloquent extends BaseRepository implements CartInventoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CartInventory::class;
    }
}
