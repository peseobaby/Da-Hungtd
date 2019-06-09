<?php
/**
 * Created by PhpStorm.
 * User: hm
 * Date: 18/05/2019
 * Time: 16:34
 */

namespace App\Repositories\RoomHasConvenience;


use App\Models\RoomHasConvenience;
use App\Repositories\Base\BaseRepository;

class RoomHasConvenienceRepository extends BaseRepository implements RoomHasConvenienceRepositoryInterface
{
    /**
     * RoomHasConvenienceRepository constructor.
     * @param RoomHasConvenience $model
     */
    public function __construct(RoomHasConvenience $model)
    {
        parent::__construct($model);
        $this->model = $model;
        $this->modelClass = RoomHasConvenience::class;
    }
}