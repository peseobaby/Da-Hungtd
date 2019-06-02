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
        return view('user.profile', compact('user'));
    }

    public function edit($id)
    {
        $user = $this->user->show($id);
        return view('user.hosocanhan', compact('user'));
    }

    public function store(Request $request, $id)
    {
        $data = $request->all();
        $this->user->store($data, $id);
        $this->show($id);
    }
}
