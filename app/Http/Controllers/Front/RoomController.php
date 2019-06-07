<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Image\ImageServiceInterface;
use App\Repositories\Room\RoomRepositoryInterface;


class RoomController extends Controller
{
    private $room;
    private $image;
    public function __construct(RoomRepositoryInterface $room, ImageServiceInterface $image)
    {
        $this->room = $room;
        $this->image = $image;
    }

    public function index($id)
    {
        $rooms = $this->room->getRooms($id);
        return view('front.room.danhsachphongdang', compact('rooms'));
    }

    public function getActive($id)
    {
        $rooms = $this->room->getRoomsActive($id);
        return view('front.room.danhsachphongdakichhoat', compact('rooms'));
    }

    public function getUnActive($id)
    {
        $rooms = $this->room->getRoomUnactive($id);
        return view('front.room.danhsachphongchuakichhoat', compact('rooms'));
    }

    public function store(Request $request, $id)
    {
        $data = $request->all();
        $data['hotel_id'] = $id;
        $this->room->create($data);
        $rooms = $this->room->getRooms($id);
        return view('front.room.danhsachphongdang', compact('rooms'));
    }
}
