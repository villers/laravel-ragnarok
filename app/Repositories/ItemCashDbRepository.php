<?php

namespace App\Repositories;

/**
 * Interface ItemCashDbRepository
 * @package App\Repositories
 */
interface ItemCashDbRepository extends BaseRepositoryInterface
{
    public function getItemByTab();
}
