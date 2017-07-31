<?php

namespace App\Repositories;

use App\Models\AccRegNum;
use App\Models\Category;

/**
 * Class CategoryRepositoryEloquent
 * @package namespace App\Repositories;
 */
class AccRegNumRepositoryEloquent extends BaseRepository implements AccRegNumRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return AccRegNum::class;
    }

    /**
     * @param array $attributes
     * @param array $values
     */
    function incrementOrCreate(array $attributes, array $values = [])
    {
       $this->model->updateOrInsert($attributes, $values);
    }
}
