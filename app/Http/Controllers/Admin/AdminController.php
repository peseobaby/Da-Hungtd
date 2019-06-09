<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\Order;
use App\Models\Room;
use Carbon\Carbon;

class AdminController extends Controller
{
    protected $data = []; // the information we send to the view

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware(backpack_middleware());
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $this->data['title'] = trans('backpack::base.dashboard'); // set the page title
        $query = Room::all();
        $this->data['rooms'] = $query;
        $this->data['rooms_activate'] = $query->where('active', ACTIVATE);
        $queryOrder = Order::all();
        $roomIdsFree4Hour = $queryOrder->where('status', SUCCESS)->where('end_at', '>=', Carbon::now()->addHours(4))->pluck('room_id')->toArray();
        $this->data['rooms_free_4_hours'] = $query->whereIn('id', $roomIdsFree4Hour);
        $hotels = Hotel::all();
        $this->data['hotels'] = $hotels;
        $this->data['hotels_have_rooms'] = $hotels->filter(function($hotel) {
           return $hotel->rooms &&  $hotel->rooms->where('active', ACTIVATE)->count();
        });
        $this->data['orders_success'] = $queryOrder->where('status', SUCCESS);
        $this->data['orders'] = $queryOrder;

        $startQuarter = new Carbon('first day of January');
        for($i = 0; $i < 4; $i++)
        {
            $this->data['orders_done'][] = $queryOrder->where('end_at', '>=', $startQuarter->copy())
                ->where('end_at', '<=', $startQuarter->addMonths(3))->count();
        }
        $this->data['orders_done'] = collect($this->data['orders_done']);
        $this->data['top10Orders'] = Order::where('status', WAIT)->orderBy('create_at', 'desc')->limit(10)->get();
        return view('backpack::dashboard', $this->data);
    }

    /**
     * Redirect to the dashboard.
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function redirect()
    {
        // The '/admin' route is not to be used as a page, because it breaks the menu's active state.
        return redirect(backpack_url('dashboard'));
    }
}
