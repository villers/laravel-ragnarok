<?php

namespace App\Repositories;

use App\Models\Totem;

/**
 * Class TotemRepositoryEloquent
 * @package App\Repositories
 */
class TotemRepositoryEloquent extends BaseRepository implements TotemRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Totem::class;
    }

    public function getTotemGroupedByRegion()
    {
        $regions = $this->model
            ->select('region')
            ->groupBy('region')
            ->get();

        $result = [];
        foreach ($regions as $region) {
            $totems = $this->model
                ->select(['map_territoire', 'conquerant_territoire'])
                ->where('region', $region['region'])
                ->get();

            $result[$region['region']] = [
                'name' => $region['region'],
                'totem' => $totems,
            ];
        }

        return $result;
    }

    public function getTerritoireStatus()
    {
        $total = $this->model
            ->count();

        $available = $this->model
            ->where('conquerant_territoire', 'Inoccupé')
            ->count();

        $conquered = $total - $available;

        return compact('total', 'available', 'conquered');
    }
}
