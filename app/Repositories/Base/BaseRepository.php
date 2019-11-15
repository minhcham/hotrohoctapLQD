<?php

namespace App\Repositories\Base;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

abstract class BaseRepository implements BaseRepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;
    protected $modelClass;

    /**
     * BaseRepository constructor.
     * @throws \Exception
     */

    public function __construct()
    {
        $this->setModel();
    }

    /**
     * @return mixed
     */

    public function getTable()
    {
        return $this->model->getTable();
    }

    /**
     * @return mixed|string
     */

    public function getKeyName()
    {
        return $this->model->getKeyName();
    }

    /**
     * @return Model|mixed
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */

    public function setModel()
    {
        $model = app()->make($this->getModel());
        if (!$model instanceof Model) {
            throw new \Exception("Class {$this->getModel()} must be an instance of Illuminate Database Eloquent Model");
        }
        $this->modelClass = $this->getModel();
        return $this->model = $model;
    }

    abstract public function getModel();

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
    public function update(array $data)
    {
        return $this->model->update($data);
    }

    /**
     * @param array $columns
     * @param string $orderBy
     * @param string $sortBy
     * @return mixed
     */
    public function all()
    {
        return $this->model->all();
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
    public function findBy(array $data, $columns = ['*'])
    {
        return $this->model->where($data)->get($columns);
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
    public function delete(): bool
    {
        return $this->model->delete();
    }

    public function getFillable()
    {
        return $this->model->getFillable();
    }

    public function findByAttrFirst($attr, $value)
    {
        return !is_null($attr) ? $this->modelClass::where($attr, $value)->first() : null;
    }

    public function createModel($data = [])
    {
        return $this->model->create($data)->fresh();
    }

    public function pluckAttr($attr)
    {
        return $this->modelClass::pluck($attr);
    }

    public function findMany(array $ids)
    {
        return $this->modelClass::findMany($ids);
    }

    public function deleteByAttr($attr, $value)
    {
        return !is_null($attr) ? $this->modelClass::where($attr, $value)->delete() : false;
    }

    public function findByAttrInArray($attr, $array = [])
    {
        return !is_null($attr) ? $this->modelClass::whereIn($attr, $array)->get() : collect([]);
    }

    public function updateOrCreateModel($data = null)
    {
        return !is_null($data) ? $this->modelClass::updateOrCreate($data) : false;
    }

    public function getModelEl(): Model
    {
        return $this->model;
    }

    public function arrayAttrId($attr = null)
    {
        return !is_null($attr) ? $this->model::pluck($attr, 'id')->toArray() : [];
    }

    public function getAllWithRelationship(
        $relations = [''],
        $columns = ['*'],
        string $orderBy = 'id',
        string $sortBy = 'asc'
    )
    {
        return $this->model->with($relations)->orderBy($orderBy, $sortBy)->get($columns);
    }

    public function orWhere(array $data1, array $data2)
    {
        return $this->model->where($data1)->orWhere($data2)->get();
    }

    public function orderBy($orderBy, $sortBy, $data)
    {
        return $this->model->where($data)->orderBy($orderBy, $sortBy)->get();
    }

    public function findByWithRelationship(
        array $relations,
        array $data,
        $columns = ['*'],
        $orderBy = 'id',
        $sortBy = 'DESC'

    )
    {
        return $this->model->with($relations)->where($data)->orderBy($orderBy, $sortBy)->get($columns);
    }

    public function whereIn($column, array $data, $relations = [])
    {
        return $this->model->with($relations)->whereIn($column, $data)->get();
    }

    public function insertOrUpdateMultiple(array $rows, array $keys)
    {
        if (empty($rows)) {
            return true;
        }
        $table = $this->getTable();
        $first = reset($rows);
        $columns = implode(',',
            array_map(function ($value) {
                return "$value";
            }, array_keys($first))
        );
        $result = array();
        foreach ($rows as $key => $row) {
            foreach ($row as $value) {
                array_push($result, $value);
            }
        }
        $binding = implode(',', array_map(function ($row) {
                return '(' . implode(',',
                        array_map(function ($value) {
                            return '?';
                        }, $row)
                    ) . ')';
            }, $rows)
        );
        foreach ($keys as $key) {
            if (array_key_exists($key, $first)) {
                unset($first[$key]);
            }
        }
        $updates = implode(',',
            array_map(function ($value) {
                return "$value = VALUES($value)";
            }, array_keys($first))
        );

        $sql = "INSERT INTO {$table}({$columns}) VALUES {$binding} ON DUPLICATE KEY UPDATE {$updates}";
        DB::insert($sql, $result);
    }


}
