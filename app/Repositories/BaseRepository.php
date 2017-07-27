<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Container as App;

/**
 * Class Repository
 * @package Bosnadev\Repositories\Eloquent
 */
abstract class BaseRepository implements BaseRepositoryInterface
{
    /**
     * @var App
     */
    private $app;

    /**
     * @var Model $model
     */
    protected $model;

    /**
     * @var
     */
    protected $newModel;

    /**
     * @param App $app
     */
    public function __construct(App $app)
    {
        $this->app = $app;
        $this->makeModel();
    }

    /**
     * Specify Model class name
     */
    protected abstract function model();

    /**
     * @return Model
     */
    protected function makeModel()
    {
        return $this->setModel($this->model());
    }

    /**
     * Set Eloquent Model to instantiate
     *
     * @param $eloquentModel
     * @return Model
     * @throws \Exception
     */
    protected function setModel($eloquentModel)
    {
        $this->newModel = $this->app->make($eloquentModel);
        if (!$this->newModel instanceof Model) {
            throw new \Exception("Class {$this->newModel} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }

        return $this->model = $this->newModel;
    }

    /*
     * Public Function Repository
     */
    /**
     * @param string $orderBy
     * @param int $paginate
     * @param string $key
     * @return mixed
     */
    function paginate($orderBy = 'desc', $paginate = 3, $key = 'created_at')
    {
        return $this->model->orderBy('created_at', $orderBy)
            ->paginate($paginate);
    }

    /**
     * @return mixed
     */
    function all()
    {
        return $this->model->all();
    }

    /**
     * @param $id
     * @param string $key
     * @return mixed
     */
    function get($id, $key = 'id')
    {
        return $this->model->where($key, $id)->firstOrFail();
    }

    /**
     * @param $item
     */
    function delete($item)
    {
        $item->delete();
    }

    /**
     * @param $item
     */
    function create($item)
    {
        $this->model->create($item);
    }

    /**
     * @param $item
     * @param $newItem
     */
    function update($item, $newItem)
    {
        $item->update($newItem);
    }
}