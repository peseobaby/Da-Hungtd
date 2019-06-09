<?php

namespace App\Http\Controllers\Front;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Image\ImageServiceInterface;
use App\Repositories\Room\RoomRepositoryInterface;
use App\Models\RoomType;
use App\Models\Convenience;



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

    public function create()
    {
        $types = RoomType::all();
        return view('front.room.mota', compact('types'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['accept'] = 0;
        $data['hotel_id'] = 1;
        $room = $this->room->create($data);
        $id = $room->id;
        return redirect()->route('convenience.room', $id);
    }

    public function convenience($id)
    {
        $conveniences = Convenience::all();
        return view('front.room.tienich', compact('conveniences'));
    }

    public function image($id)
    {
        return view('front.room.hinhanh');
    }

    public function price($id)
    {
        return view('front.room.gia');
    }

    public function show($id)
    {
        return view('front.room.mota', ['room' => Room::find($id)]);
    }
}
