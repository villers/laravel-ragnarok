<?php

namespace App\Repositories;

use App\Models\VendingItem;

/**
 * Class VendingItemRepositoryEloquent
 * @package App\Repositories
 */
class VendingItemRepositoryEloquent extends BaseRepository implements VendingItemRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return VendingItem::class;
    }
}
