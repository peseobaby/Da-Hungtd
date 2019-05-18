<?php
namespace App\Repositories\Event;


use App\Models\Event;
use App\Repositories\Base\BaseRepository;

class EventRepository extends BaseRepository implements EventRepositoryInterface
{
    /**
     * EventRepository constructor.
     * @param Event $model
     */
    public function __construct(Event $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }
}