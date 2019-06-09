<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Room;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('check_login')->only(['setOrder']);
    }

    public function show($id)
    {
        $user = User::where('id', backpack_user()->id)->first();
        $orders = Order::where('hotel_id', $id)->get();
        return view('front.order.danhsachphongdat', compact('orders', 'user'));
    }

    public function guestIn($id)
    {
        $orders = Order::where('hotel_id', $id)->where('create_at', Carbon::today())->get();
        return view('front.order.dashbroad-host', compact('orders', 'id'));
    }

    public function guestOut($id)
    {
        $orders = Order::where('hotel_id', $id)->where('end_at', Carbon::today())->get();
        return view('front.order.khachtraphong', compact('orders', 'id'));
    }

    public function guestAt($id)
    {
        $orders = Order::where('hotel_id', $id)->where('end_at', '>', Carbon::today())->where('create_at', '<', Carbon::today())->get();
        return view('front.order.khachluutru', compact('orders', 'id'));
    }

    public function setOrder(Request $request, $id)
    {
        if (session()->has('REQUEST')) {
            $data = session()->get('REQUEST')[0];
            session()->forget('REQUEST');
        } else {
            $data = $request->all();
        }
        $data['create_at'] = date("Y-m-d H:i:s", strtotime($data['create_at']));
        $data['end_at'] = date("Y-m-d H:i:s", strtotime($data['end_at']));
        $data['room_id'] = $id;
        $now = Carbon::now()->toDateString();
        $end_date = Carbon::parse($request->input('end_at'));
        $create_date = Carbon::parse($request->input('create_at'));
        $lengthOfEnd = $end_date->diffInDays($now);
        $lengthOfCreate = $create_date->diffInDays($now);
        $total = $lengthOfEnd - $lengthOfCreate + 1;
        $price = Room::find($id)->price * $total;
        $data['price'] = $price;
        $order = Order::with('room')->create($data);
        return view('front.order.thanhtoan', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $data = [
            'phone' => $request->phone,
            'serial_number' => $request->serial_number,
            'user_id' => backpack_user()->id,
            'hotel_id' => backpack_user()->hotels->first()->id,
        ];
        Order::find($id)->update($data);
        $order = Order::find($id);
        return redirect()->route('my.order', $order->user_id)->with('alert', 'đặt phòng thành công');
    }

    public function showOrder($id)
    {
        $orders = Order::where('user_id', $id)->get();
        $user = User::where('id', $id)->first();
        return view('front.order.myorder', compact('orders', 'user'));
    }
}
