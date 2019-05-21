<?php

namespace App\Repositories\Base;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model;
    protected $modelClass;
    /**
     * BaseRepository constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    /**
     * @param array $data
     * @return bool
     */
    public function update(array $data) : bool
    {
        return $this->model->update($data);
    }

    /**
     * @param array $columns
     * @param string $orderBy
     * @param string $sortBy
     * @return mixed
     */
    public function all($columns = ['*'], string $orderBy = 'id', string $sortBy = 'asc')
    {
        return $this->model->orderBy($orderBy, $sortBy)->get($columns);
    }

    /**
     * @param string $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * @param  $id
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findOneOrFail($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * @param array $data
     * @return Collection
     */
    public function findBy(array $data)
    {
        return $this->model->where($data)->get();
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function findOneBy(array $data)
    {
        return $this->model->where($data)->first();
    }

    /**
     * @param array $data
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findOneByOrFail(array $data)
    {
        return $this->model->where($data)->firstOrFail();
    }

    /**
     * @return bool
     * @throws \Exception
     */
    public function delete() : bool
    {
        return $this->model->delete();
    }



    public function findByAttrFirst($attr = null, $value)
    {
        return !is_null($attr) ? $this->modelClass::where($attr, $value)->first() : null;
    }

    public function createModel($data = [])
    {
        return $this->modelClass::create($data)->fresh();
    }

    public function pluckAttrId($attr = null)
    {
        return !is_null($attr) ? $this->modelClass::pluck($attr, 'id')->all() : collect([]);
    }

    public function deleteByAttr($attr = null, $value)
    {
        return !is_null($attr) ? $this->modelClass::where($attr, $value)->delete() : false;
    }

    public function findByAttrInArray($attr = null, $array = [])
    {
        return !is_null($attr) ? $this->modelClass::whereIn($attr, $array)->get() : collect([]);
    }

    public function updateOrCreateModel($data = null)
    {
        return !is_null($data) ? $this->modelClass::updateOrCreate($data) : false;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }
}