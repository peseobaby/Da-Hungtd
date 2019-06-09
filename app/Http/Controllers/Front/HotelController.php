<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\StoreHotelRequest;
use App\Repositories\Address\AddressRepositoryInterface;
use App\Repositories\Hotel\HotelRepositoryInterface;
use App\Services\Image\ImageServiceInterface;
use App\Models\Provide;
use App\Models\City;

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
    public function create()
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

    public function edit($id)
    {
        $data['provinces'] = getAllProvides();
        $data['cities'] = getAllCities();
        $hotel = $this->hotelRepo->find($id);
        return view('front.hotel.create_hotel', $hotel);
    }

    public function update(StoreHotelRequest $request, $id)
    {
        $address = $this->addressRepo->update([
            'name' => $request->address,
            'city' => $request->city_id,
            'provide' => $request->province_id,
        ]);
        //create hotel and sync image
        $this->hotelRepo->update([
            'name' => $request->name,
            'address_id' => $address->id
        ])->updateImage($request->image);

        return redirect()->back()->with(['message' => 'Update hotel Done']);
    }

    public function show($id)
    {
        $provinces = getAllProvides();
        $cities = getAllCities();
        $hotel = $this->hotelRepo->find($id);
        return view('front.hotel.show_hotel', compact('hotel'));
    }
}