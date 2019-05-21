<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\StoreHotelRequest;
use App\Repositories\Address\AddressRepositoryInterface;
use App\Repositories\Hotel\HotelRepositoryInterface;
use App\Services\Image\ImageServiceInterface;

class HotelController extends Controller
{
    private $imageService;
    private $hotelRepo;
    private $addressRepo;

    public function __construct(HotelRepositoryInterface $hotelRepo, ImageServiceInterface $imageService,
                                AddressRepositoryInterface $adressRepo)
    {
        $this->imageService = $imageService;
        $this->hotelRepo = $hotelRepo;
        $this->addressRepo = $adressRepo;

    }
    public function index()
    {
        $data['provinces'] = getAllProvides();
        $data['cities'] = getAllCities();
        return view('front.hotel.create_hotel', $data);
    }

    public function store(StoreHotelRequest $request)
    {
        //create address
        $address = $this->addressRepo->create([
            'name' => $request->address,
            'city' => $request->city_id,
            'provide' => $request->province_id,
        ]);
        //create hotel and sync image
        $this->hotelRepo->create([
            'name' => $request->name,
            'address_id' => $address->id
        ])->createImage($request->image);

        return redirect()->back()->with(['message' => 'Create hotel Done']);
    }
}