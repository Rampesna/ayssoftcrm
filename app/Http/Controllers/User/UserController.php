<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserStoreRequest;
use App\Http\Requests\User\UserUpdateRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Index()
    {
        return view('pages.user.index');
    }

    public function Create()
    {
        return view('pages.user.create');
    }

    public function Store(UserStoreRequest $request)
    {

    }

    public function Edit($id)
    {
        return view('pages.user.edit');
    }

    public function Update(UserUpdateRequest $request)
    {

    }

    public function Delete(Request $request)
    {

    }

    public function Notes()
    {
        return view('pages.user.notes');
    }
}
