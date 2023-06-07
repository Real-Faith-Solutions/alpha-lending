<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

class UserController extends Controller
{
    public function getUsers(){
        $allUsers = User::query()
            ->get();

        return $allUsers;
    }

    public function getUsersTable(){
        $allUsers = User::query()
            ->get();

        return view('users', compact('allUsers'))->render();
    }
}
