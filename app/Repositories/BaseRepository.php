<?php
namespace App\Repositories;

use Illuminate\Container\Container as Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\Contracts\Repositories\IBaseRepository;
use App\Exceptions\RepositoryException;

/**
* Base Repository
*/
abstract class BaseRepository implements IBaseRepository
{
	/**
     * @var Application
     */
    protected $app;

	protected $model;

	abstract public function model();

	public function __construct(Application $app)
	{
        $this->app = $app;
        $this->makeModel();
	}

	public function getFieldFillable(){
		return $this->model->getFillable();
	}

	public function getTableColumns() {
        return $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
    }

	/**
     * @return Model
     * @throws RepositoryException
     */
    public function makeModel()
    {
        $model = $this->app->make($this->model());

        if (!$model instanceof Model) {
            throw new RepositoryException("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }

        return $this->model = $model;
    }

    /**
     * 
     */
    public function resetModel()
    {
        $this->makeModel();
    }

	/**
	* 
	*/
	public function all()
	{
		return $this->model->all(); 
	}

	/**
	* 
	*/
	public function first($id)
	{
		return $this->model->find($id); 
	}

	/**
	* 
	*/
	public function findByField($field, $value)
	{
		if(empty($field)){
			throw new RepositoryException("Param 1 must not be empty!");
		}
		if(!in_array($field, $this->getTableColumns())){
			throw new RepositoryException("Param 1 must be a field in table!");
		}
		return $this->model->where([$field => $value])->get();
	}

	/**
	* 
	*/
	public function paginate($limit = null, $order = ['field' => '', 'value' => ''])
	{
		return $this->model->orderBy($order['field'], $order['value'])->paginate($limit);
	}

	/**
	* 
	*/
	public function where($where)
	{
		if(empty($where)){
			throw new RepositoryException("Param 1 must be an array and can't empty!");
		}
		return $this->model->where($where);
	}

	/**
	* 
	*/
	public function whereIn($field, $array)
	{
		if(empty($field)){
			throw new RepositoryException("Param 1 must not be empty!");
		}
		if(empty($array) || !is_array($array)){
			throw new RepositoryException("Param 2 must not be empty and it must be an array!");
		}
		return $this->model->whereIn($field, $array);
	}

	/**
	* 
	*/
	public function whereNotIn($field, $value)
	{
		if(empty($field)){
			throw new RepositoryException("Param 1 must not be empty!");
		}
		if(empty($array) || !is_array($array)){
			throw new RepositoryException("Param 2 must not be empty and it must be an array!");
		}
		return $this->model->whereNotIn($field, $array);
	}

	/**
	* 
	*/
	public function create($array)
	{
		if(empty($array) || !is_array($array)){
			throw new RepositoryException("Param 2 must not be empty and it must be an array!");
		}
		return $this->model->create($array);
	}

	/**
	* 
	*/
	public function update($array, $where)
	{
		if(empty($array) || !is_array($array)){
			throw new RepositoryException("Param 1 must not be empty and it must be an array!");
		}
		if(empty($where)){
			throw new RepositoryException("Param 2 must not be empty!");
		}
		return $this->where($where)->update($array);
	}

	/**
	* 
	*/
	public function updateOrCreate($array)
	{
		if(empty($array) || !is_array($array)){
			throw new RepositoryException("Param 2 must not be empty and it must be an array!");
		}
		return $this->model->updateOrCreate($array);
	}

	/**
	* Delete by id
	*/
	public function deleteOne($id)
	{
		if(empty($id)){
			throw new RepositoryException("Param 1 must not be empty!");
		}
		return $this->model->find($id)->delete();
	}
}