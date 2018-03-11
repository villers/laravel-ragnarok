<?php

namespace App\Repositories;

/**
 * Interface SiteOnlinepeakRepository
 * @package namespace App\Repositories;
 */
interface SiteOnlinepeakRepository extends BaseRepositoryInterface
{
    public function updateMaxOnline($nbOnline);
}
