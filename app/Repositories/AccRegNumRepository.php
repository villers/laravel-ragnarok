<?php

namespace App\Repositories;

/**
 * Interface AccRegNumRepository
 * @package namespace App\Repositories;
 */
interface AccRegNumRepository extends BaseRepositoryInterface
{
    public function getCashPoint($account_id);
}
