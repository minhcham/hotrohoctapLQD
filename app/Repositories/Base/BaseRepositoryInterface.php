<?php

namespace App\Repositories\Base;

use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    /**
     * @param $getTableName
     * @return mixed
     */
    public function getTable();

    /**
     * @param $getKeyName
     * @return mixed
     */
    public function getKeyName();

    /**
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes);

    /**
     * @param array $attributes
     * @return bool
     */
    public function update(array $attributes);

    /**
     * @param array $columns
     * @param string $orderBy
     * @param string $sortBy
     * @return mixed
     */
    public function all();

    /**
     * @param $id
     * @return mixed
     */
    public function find($id);

    /**
     * @param $id
     * @return mixed
     */
    public function findOneOrFail($id);

    /**
     * @param array $data
     * @return mixed
     */
    public function findBy(array $data, $columns = ['*']);

    /**
     * @param array $data
     * @return mixed
     */
    public function findOneBy(array $data);

    /**
     * @param array $data
     * @return mixed
     */
    public function findOneByOrFail(array $data);

    /**
     * @return bool
     */
    public function delete();

    public function findByAttrFirst($attr, $value);

    public function createModel($data = []);

    public function pluckAttr($attr);

    public function findMany(array $ids);

    public function deleteByAttr($attr, $value);

    public function findByAttrInArray($attr, $array = []);

    public function updateOrCreateModel($data = null);

    public function getFillable();

    public function getModelEl(): Model;

    public function orWhere(array $data1, array $data2);

    public function orderBy($orderBy, $sortBy, $data);

    public function findByWithRelationship(
        array $relations,
        array $data,
        $columns = ['*'],
        $orderBy = 'id',
        $sortBy = 'DESC'
    );

    public function getAllWithRelationship(
        $relations = [''],
        $columns = ['*'],
        string $orderBy = 'id',
        string $sortBy = 'asc'
    );

    public function whereIn($column, array $data, $relations = []);

    public function insertOrUpdateMultiple(array $rows,array $keys);




}
