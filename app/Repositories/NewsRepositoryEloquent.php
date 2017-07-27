<?php

namespace App\Repositories;

use App\Models\News;

/**
 * Class NewsRepositoryEloquent
 * @package namespace App\Repositories;
 */
class NewsRepositoryEloquent extends BaseRepository implements NewsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return News::class;
    }
}
