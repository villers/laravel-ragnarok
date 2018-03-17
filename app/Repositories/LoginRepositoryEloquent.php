<?php

namespace App\Repositories;

use App\Models\Login;

/**
 * Class LoginRepositoryEloquent
 * @package App\Repositories
 */
class LoginRepositoryEloquent extends BaseRepository implements LoginRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Login::class;
    }
}
