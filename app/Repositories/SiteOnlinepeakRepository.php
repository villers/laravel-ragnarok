<?php

namespace App\Repositories;

/**
 * Interface SiteOnlinepeakRepository
 * @package namespace App\Repositories;
 */
interface SiteOnlinepeakRepository extends BaseRepositoryInterface
{
    function updateMaxOnline($nbOnline);
}
