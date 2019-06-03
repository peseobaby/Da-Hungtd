<?php

namespace App\Http\Controllers\Front;

use App\Models\Event;
use App\Models\Provide;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::all();
        $provides = Provide::limit(6)->get();
        $rooms = Room::limit(6)->get();
        return view('front.home.index', compact('events', 'provides', 'rooms'));
    }
}
