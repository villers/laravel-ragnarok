<?php

namespace App\Repositories;

use App\Models\Char;

/**
 * Class CharRepositoryEloquent
 * @package namespace App\Repositories;
 */
class CharRepositoryEloquent extends BaseRepository implements CharRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Char::class;
    }

    public function getByAccountId($id)
    {
        return $this->model->where('account_id', $id)->get();
    }

    public function get($charId, $accountId = null, $isOnline = null)
    {
        $char = $this->model->where('char_id', $charId);

        if (!is_null($accountId)) {
            $char = $char->where('account_id', $accountId);
        }

        if (!is_null($isOnline)) {
            $char = $char->where('online', $isOnline);
        }

        return $char->firstOrFail();
    }

    public function isOnline($account_id)
    {
        return $this->model->where(['online' => 1, 'account_id' => $account_id])->count() > 0;
    }

    public function getOnline($account_id = null)
    {
        return $this->model->where('online', '>', 0)
            ->with('guild')
            ->orderBy('guild_id', 'class')
            ->get();
    }

    public function countOnline()
    {
        return $this->model->where('online', '>', 0)->count();
    }

    public function reset($char)
    {
        $char->last_map = $char->save_map;
        $char->last_x = $char->save_x;
        $char->last_y = $char->save_y;
        $char->hair = 1;
        $char->hair_color = 0;
        $char->clothes_color = 0;
        $char->body = 0;
        $char->shield = 0;
        $char->head_top = 0;
        $char->head_mid = 0;
        $char->head_bottom = 0;
        $char->robe = 0;

        return $char->save();
    }
}
