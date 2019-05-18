<?php
namespace App\Repositories\Convenience;


use App\Models\Convenience;
use App\Repositories\Base\BaseRepository;

class ConvenienceRepository extends BaseRepository implements ConvenienceRepositoryInterface
{
    /**
     * ConvenienceRepository constructor.
     * @param Convenience $model
     */
    public function __construct(Convenience $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }
}