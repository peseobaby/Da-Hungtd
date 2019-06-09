<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Room;
use App\Models\Hotel;

class FeedbackController extends Controller
{
    public function feedback($id)
    {
        $room = Room::find($id);
        return view('front.feedback.feedback', compact('room'));
    }

    public function store(Request $request, $id)
    {
        $data = ['feedback' => $request->feedback,
              'room_id' =>  $id,
              'hotel_id' => Room::with('hotel')->find($id)->hotel->id,
              'rate' => $request->rate,
              'user_id' => backpack_user()->id,
          ];
        Feedback::create($data);
        return redirect()->route('all.room', $data['hotel_id'])->with('alert', 'Tạo feedback thành công');
    }
}
