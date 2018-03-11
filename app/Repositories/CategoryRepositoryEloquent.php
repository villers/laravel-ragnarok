<?php

namespace App\Repositories;

use App\Models\Category;

/**
 * Class CategoryRepositoryEloquent
 * @package namespace App\Repositories;
 */
class CategoryRepositoryEloquent extends BaseRepository implements CategoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Category::class;
    }

    public function allToList()
    {
        $result = [];
        $categories = $this->model->all(['id', 'title'])->toArray();
        foreach ($categories as $category) {
            $categoryId = $category['id'];
            $result[$categoryId] = $category['title'];
        }
        return $result;
    }
}
