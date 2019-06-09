<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('check_login')->only(['setOrder']);
    }

    public function show($id)
    {
        $user = User::where('id', 1)->first();
        $orders = Order::where('hotel_id', $id)->get();
        return view('front.order.danhsachphongdat', compact('orders', 'user'));
    }

    public function guestIn($id)
    {
        $orders = Order::where('hotel_id', $id)->where('create_at', Carbon::today())->get();
        return view('front.order.dashbroad-host', compact('orders'));
    }

    public function guestOut($id)
    {
        $orders = Order::where('hotel_id', $id)->where('end_at', Carbon::today())->get();
        return view('front.order.khachtraphong', compact('orders'));
    }

    public function guestAt($id)
    {
        $orders = Order::where('hotel_id', $id)->where('end_at', '>', Carbon::today())->where('create_at', '<', Carbon::today())->get();
        return view('front.order.khachluutru', compact('orders'));
    }

    public function setOrder(Request $request)
    {
        if (session()->has('REQUEST')) {
            $data = session()->get('REQUEST')[0];
            session()->forget('REQUEST');
        } else {
            $data = $request->all();
        }
        $data['create_at'] = date("Y-m-d H:i:s", strtotime($data['create_at']));
        $data['end_at'] = date("Y-m-d H:i:s", strtotime($data['end_at']));
        $order = Order::create($data);
        return view('front.order.thanhtoan');
    }
}
