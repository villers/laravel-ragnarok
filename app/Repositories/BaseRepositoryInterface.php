<?php

namespace App\Repositories;

/**
 * Interface CategoryRepository
 * @package namespace App\Repositories;
 */
interface BaseRepositoryInterface
{
    public function paginate($orderBy = 'desc', $paginate = 3, $key = 'created_at');
    public function all();
    public function get($id, $key = 'id');
    public function getAll($id, $key = 'id');
    public function delete($item);
    public function create($item);
    public function update($item, $newItem);
}
