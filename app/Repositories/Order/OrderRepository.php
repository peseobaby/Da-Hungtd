<?php
namespace App\Repositories\Order;


use App\Models\Order;
use App\Repositories\Base\BaseRepository;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{
    /**
     * OrderRepository constructor.
     * @param Order $model
     */
    public function __construct(Order $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }
}