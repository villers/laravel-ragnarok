<?php

namespace App\Repositories;

/**
 * Interface AccRegNumRepository
 * @package namespace App\Repositories;
 */
interface AccRegNumRepository extends BaseRepositoryInterface
{
    function incrementOrCreate(array $attributes, array $values = []);
    function getCashPoint($account_id);
}
