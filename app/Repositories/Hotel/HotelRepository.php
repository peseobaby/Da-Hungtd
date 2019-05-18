<?php
namespace App\Repositories\Hotel;


use App\Models\Hotel;
use App\Repositories\Base\BaseRepository;

class HotelRepository extends BaseRepository implements HotelRepositoryInterface
{
    /**
     * HotelRepository constructor.
     * @param Hotel $model
     */
    public function __construct(Hotel $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }
}