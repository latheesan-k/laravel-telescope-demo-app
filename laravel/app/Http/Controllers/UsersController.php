<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $allUsers = User::all();

        return view('users.index')
            ->with('allUsers', $allUsers);
    }

    /**
     * @param $user_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function show($user_id)
    {
        $user = User::where('id', $user_id)->first();

        if (!$user) {
            throw new \Exception('User not found.');
        }

        return view('users.show')
            ->with('user', $user);
    }
}
