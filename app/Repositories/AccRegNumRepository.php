<?php

namespace App\Repositories;

/**
 * Interface AccRegNumRepository
 * @package namespace App\Repositories;
 */
interface AccRegNumRepository extends BaseRepositoryInterface
{
    public function incrementOrCreate(array $attributes, array $values = []);
    public function getCashPoint($account_id);
}
