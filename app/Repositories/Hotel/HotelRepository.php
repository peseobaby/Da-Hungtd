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

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function show()
    {
        return $this->model->where('user_id', Auth::user()->id)->get(); 
    } //show thông tin hotel

    public function update($data , $id)
    {
        $arr =[
            'name' => $data['name'],
            'adress_id' => $data['address_id'],
            'cover' => $data['cover'],
        ]
        return $this->model->find($id)->update($arr);
    } // update thông tin hotel


}