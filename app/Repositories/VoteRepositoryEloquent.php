<?php

namespace App\Repositories;

use App\Models\Vote;

/**
 * Class VoteRepositoryEloquent
 * @package App\Repositories
 */
class VoteRepositoryEloquent extends BaseRepository implements VoteRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Vote::class;
    }
}
