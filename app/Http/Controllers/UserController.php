<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function edit($id)
    {
        $user = User::find($id);
        return view('front.hosocanhan');
    }

    public function update(Request $request, $id)
    {
        
        $arr = [
            "name" => $request->name,
            "phone" => $request->phone,
            "cover" => $request->cover,
            "address" => $request->address,
            "cmnd" => $request->cmnd,
        ];
        $user = User::find($id)->update($arr);
        return redirect()->route('user.show', $id)->with('alert', 'Đã cập nhật');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('front.user.profile');
    }
}
