<?php
namespace App\Repositories\Room;


use App\Models\Room;
use App\Repositories\Base\BaseRepository;

class RoomRepository extends BaseRepository implements RoomRepositoryInterface
{
    /**
     * RoomRepository constructor.
     * @param Room $model
     */
    public function __construct(Room $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getRooms($id)
    {
        return $rooms = $this->model->where('hotel_id', $id)->get();
    }

    public function getRoomsActive($id)
    {
        return $rooms = $this->model->where('hotel_id', $id)->where('accept', 1)->get();
    }

    public function getRoomUnactive($id)
    {
        return $rooms = $this->model->where('hotel_id', $id)->where('accept', 0)->get();
    }

    public function store($data)
    {
        return $this->model->create($data);
    }

    public function getType()
    {
        return $this->model->type;
    }
}