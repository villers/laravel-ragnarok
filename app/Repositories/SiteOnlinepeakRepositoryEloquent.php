<?php

namespace App\Repositories;

use App\Models\SiteOnlinepeak;

/**
 * Class SiteOnlinepeakRepositoryEloquent
 * @package namespace App\Repositories;
 */
class SiteOnlinepeakRepositoryEloquent extends BaseRepository implements SiteOnlinepeakRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return SiteOnlinepeak::class;
    }

    public function updateMaxOnline($nbOnline)
    {
        $nbMax = $this->model->findOrFail(1);

        if ((int)$nbOnline > (int)$nbMax->players) {
            $nbMax->players = $nbOnline;
            $nbMax->save();
        }

        return $nbMax->players;
    }
}
