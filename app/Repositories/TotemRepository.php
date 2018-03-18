<?php

namespace App\Repositories;

/**
 * Interface TotemRepository
 * @package App\Repositories
 */
interface TotemRepository extends BaseRepositoryInterface
{
    public function getTotemGroupedByRegion();
    public function getTerritoireStatus();
}
