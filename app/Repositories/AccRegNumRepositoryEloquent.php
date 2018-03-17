<?php

namespace App\Repositories;

use App\Models\AccRegNum;

/**
 * Class CategoryRepositoryEloquent
 * @package namespace App\Repositories;
 */
class AccRegNumRepositoryEloquent extends BaseRepository implements AccRegNumRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return AccRegNum::class;
    }

    /**
     * @param $account_id
     * @return int|mixed
     * @internal param array $attributes
     * @internal param array $values
     */
    public function getCashPoint($account_id)
    {
        $result = $this->model->where([
            'account_id' => $account_id,
            'key' => '#CASHPOINTS'
        ])->first();

        return ($result) ? $result->value : 0;
    }
}
