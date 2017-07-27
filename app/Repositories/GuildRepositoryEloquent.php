<?php

namespace App\Repositories;

use App\Models\Guild;

/**
 * Class GuildRepositoryEloquent
 * @package namespace App\Repositories;
 */
class GuildRepositoryEloquent extends BaseRepository implements GuildRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Guild::class;
    }
}
