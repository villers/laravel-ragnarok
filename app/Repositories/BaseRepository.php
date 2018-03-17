<?php

namespace App\Repositories;

use Illuminate\Container\Container as App;
use Illuminate\Database\Eloquent\Model;

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
    abstract protected function model();

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
     * @throws \Exception
     * @return Model
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
    public function paginate($orderBy = 'desc', $paginate = 3, $key = 'created_at')
    {
        return $this->model->orderBy('created_at', $orderBy)
            ->paginate($paginate);
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * @param $id
     * @param string $key
     * @return mixed
     */
    public function get($id, $key = 'id')
    {
        return $this->model->where($key, $id)->firstOrFail();
    }

    /**
     * @param $id
     * @param string $key
     * @return mixed
     */
    public function getAll($id, $key = 'id')
    {
        return $this->model->where($key, $id);
    }

    /**
     * @param $item
     */
    public function delete($item)
    {
        $item->delete();
    }

    /**
     * @param $item
     */
    public function create($item)
    {
        $this->model->create($item);
    }

    /**
     * @param $item
     * @param $newItem
     */
    public function update($item, $newItem)
    {
        $item->update($newItem);
    }

    /**
     * @param array $attributes
     * @param array $values
     */
    public function incrementOrCreate(array $attributes, array $values = [])
    {
        $this->model->updateOrInsert($attributes, $values);
    }
}
