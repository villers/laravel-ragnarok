<?php

namespace App\Repositories;

/**
 * Interface CharRepository
 * @package namespace App\Repositories;
 */
interface CharRepository extends BaseRepositoryInterface
{
    function getByAccountId($id);
    function get($charId, $accountId = null, $isOnline = null);
    function getOnline();
    function countOnline();
    function reset($char);
}
