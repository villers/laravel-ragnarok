<?php

namespace App\Repositories;

/**
 * Interface CharRepository
 * @package namespace App\Repositories;
 */
interface CharRepository extends BaseRepositoryInterface
{
    public function getByAccountId($id);
    public function get($charId, $accountId = null, $isOnline = null);
    public function isOnline($account_id);
    public function getOnline();
    public function countOnline();
    public function reset($char);
}
