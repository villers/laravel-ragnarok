<?php

namespace App\Repositories;

use App\Models\ItemCashDb;

/**
 * Class ItemCashDbRepositoryEloquent
 * @package App\Repositories
 */
class ItemCashDbRepositoryEloquent extends BaseRepository implements ItemCashDbRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ItemCashDb::class;
    }

    public function getItemByTab()
    {
        return $this->model->with('item')
            ->get()
            ->groupBy('tab');
    }

}
