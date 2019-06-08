<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Image\ImageServiceInterface;
use App\Repositories\User\UserRepositoryInterface;

class UserController extends Controller
{
    private $image;
    private $user;

    public function __construct(UserRepositoryInterface $user, ImageServiceInterface $image)
    {
        $this->image = $image;
        $this->user = $user;
    }

    public function show($id)
    {
        $user = $this->user->show($id);
        return view('front.user.profile', compact('user'));
    }

    public function edit($id)
    {
        $user = $this->user->show($id);
        return view('front.user.hosocanhan', compact('user'));
    }

    public function update(Request $request, $id)
    {
        dd($request->all());
    }
}
