<?php

namespace App\Http\Controllers\Front;

use App\Models\City;
use App\Models\Hotel;
use App\Models\Order;
use App\Models\Provide;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Image\ImageServiceInterface;
use App\Repositories\Room\RoomRepositoryInterface;
use App\Repositories\RoomHasConvenience\RoomHasConvenienceRepository;
use App\Models\RoomType;
use App\Models\Convenience;
use Carbon\Carbon;



class RoomController extends Controller
{
    private $room;
    private $imageService;
    private $roomHasConvenienceRepo;

    public function __construct(RoomRepositoryInterface $room, ImageServiceInterface $imageService, RoomHasConvenienceRepository $roomHasConvenienceRepo)
    {
        $this->room = $room;
        $this->imageService = $imageService;
        $this->roomHasConvenienceRepo = $roomHasConvenienceRepo;
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
        return view('front.room.create', compact('types'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['accept'] = 0;
        $data['hotel_id'] = backpack_user()->hotels->first()->id;
        $room = $this->room->create($data);
        $id = $room->id;
        return redirect()->route('convenience.room', $id);
    }

    public function convenience($id)
    {
        $conveniences = Convenience::all();
        return view('front.room.tienich', compact('conveniences', 'id'));
    }

    public function updateConvenience(Request $request, $id)
    {
        $room = Room::find($id);
        $convenience = $request->convenince;
        $request->offsetUnset('convenience_id');
        $convenience = $this->roomHasConvenienceRepo->updateOrCreateModel(['content' => implode(':', $convenience)]);
        $room->update(['convenience_id' => $convenience->id]);
        return view('front.room.hinhanh', compact('id'));
    }

    public function image(Request $request, $id)
    {
        $room = Room::find($id);
        $uploadFiles = $request->image;
        $images = $this->imageService->storageUploadFileImages($uploadFiles, '', $srcFolder = '', $disk = 'local');
        $room->images()->sync($images);
        return view('front.room.gia', compact('id'));
    }

    public function price(Request $request, $id)
    {
        $room = Room::find($id);
        $room->update(['price' => $request->price]);
        return redirect()->route('all.room', backpack_user()->hotels->first()->id);
    }

    public function show($id)
    {
        return view('front.room.mota', ['room' => Room::find($id)]);
    }

    public function search(Request $request)
    {
        $query = Room::query();
        $roomsCities = collect([]);
        $roomsCountries = collect([]);
        $roomsConviences = collect();

        if ($request->get('query')) {
            $cities = City::where('name', 'like', '%' . $request->get('query') . '%')->pluck('id')->toArray();
            $roomsCities = count($cities) ? Room::whereHas('hotel', function($query) use ($cities){
                $query->whereIn('city_id', $cities);
            })->get() : collect([]);

            $countries = Provide::where('name', 'like', '%' . $request->get('query') . '%')->pluck('id')->toArray();
            $roomsCountries= count($countries) ?  Room::whereHas('hotel', function($query) use ($countries){
                $query->whereIn('provide_id', $countries);
            })->get() : collect([]);

            $conviences = Convenience::where('name', 'like', '%' . $request->get('query') . '%')->get()->implode('id', ':');
            if ($conviences !== '') {
                $roomsConviences = $conviences !== '' ? Room::whereHas('convenience', function($query) use ($conviences){
                    $query->where('content', 'like', '%' . $conviences . '%');
                })->get() : collect([]);
            }

            $query = $query->where('description', 'like', '%' . $request->get('query') . '%')
                ->orWhere('name', 'like', $request->get('query'));
        }
        if ($request->get('start_at') && $request->get('end_at')) {
            $roomIds = Order::all()->filter(function ($order) use ($request) {
                return $order->create_at <= Carbon::createFromTimeString($request->has('start_at'), 'Asia/Ho_Chi_Minh')
                    && $order->end_at >= Carbon::createFromTimeString($request->has('end_at'), 'Asia/Ho_Chi_Minh');
            })->pluck('room_id')->toArray();
            $query = $query->whereNotIn('id', $roomIds);
        }
        if ($request->get('capacity')) {
            $query = $query->where('capacity', '>=', $request->get('capacity'));
        }
        $rooms = $query->get();

        $response = collect([]);
        $roomsCities->each(function($item) use ($response) {
            $response->push($item);
        });

        $roomsCountries->each(function($item) use ($response) {
            $response->push($item);
        });

        $roomsConviences->each(function($item) use ($response) {
            $response->push($item);
        });

        $rooms->each(function($item) use ($response) {
            $response->push($item);
        });

        $response->unique();

        foreach ($response as $room) {
            $ratings = $room->feedbacks->count() ? $room->feedbacks->pluck('rate')->toArray() : [];
            $ratings = array_filter($ratings);
            $room->average = count($ratings) ? FLOOR(array_sum($ratings)/count($ratings)) : 0;
        }
        return view('front.room.search', ['rooms' => $response]);
    }

    public function searchProvince($idProvince)
    {
        $query = Room::query();
        $query = $query->whereHas('hotel', function($query) use ($idProvince) {
           $query->where('provide_id', (int)$idProvince);
        });
        $rooms = $query->get();
        foreach ($rooms as $room) {
            $ratings = $room->feedbacks->count() ? $room->feedbacks->pluck('rate')->toArray() : [];
            $ratings = array_filter($ratings);
            $room->average = count($ratings) ? FLOOR(array_sum($ratings)/count($ratings)) : 0;
        }
        $rooms = $rooms->count() == Room::all()->count() ? collect([]) : $rooms;
        return view('front.room.search', compact('rooms'));
    }

    public function detail($id)
    {
        return view('front.room.detail', ['room' => Room::find($id)]);
    }
}
