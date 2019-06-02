<?php
namespace App\Repositories\User;


use App\Repositories\Base\BaseRepository;
use App\User;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /**
     * UserRepository constructor.
     * @param User $model
     */
    public function __construct(User $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function show($id)
    {
        return $this->model->find($id);
    }

    public function store($data, $id)
    {
        return $this->model->find($id)->store($data);
    }
}