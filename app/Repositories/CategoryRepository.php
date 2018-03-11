<?php

namespace App\Repositories;

/**
 * Interface CategoryRepository
 * @package namespace App\Repositories;
 */
interface CategoryRepository extends BaseRepositoryInterface
{
    public function allToList();
}
