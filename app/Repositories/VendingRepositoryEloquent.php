<?php

namespace App\Repositories;

use App\Models\Vending;

/**
 * Class VendingRepositoryEloquent
 * @package App\Repositories
 */
class VendingRepositoryEloquent extends BaseRepository implements VendingRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Vending::class;
    }
}
