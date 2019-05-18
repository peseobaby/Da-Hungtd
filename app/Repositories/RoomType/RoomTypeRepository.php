<?php

namespace App\Repositories\RoomType;

use App\Models\RoomType;
use App\Repositories\Base\BaseRepository;

class RoomTypeRepository extends BaseRepository implements RoomTypeRepositoryInterface
{
    /**
     * RoomTypeRepository constructor.
     * @param RoomType $model
     */
    public function __construct(RoomType $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }
}