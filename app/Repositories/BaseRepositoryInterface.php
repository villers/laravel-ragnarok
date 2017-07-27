<?php

namespace App\Repositories;

/**
 * Interface CategoryRepository
 * @package namespace App\Repositories;
 */
interface BaseRepositoryInterface
{
    function paginate($orderBy = 'desc', $paginate = 3, $key = 'created_at');
    function all();
    function get($id, $key = 'id');
    function delete($item);
    function create($item);
    function update($item, $newItem);
}
