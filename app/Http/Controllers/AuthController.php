<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function userLogin(Request $request){
        $findUser = User::query()
            ->where('email', $request->email)
            ->first();

        if ($findUser && Hash::check($request->password, $findUser->password)) {
            Auth::login($findUser);

            return Redirect::to('admin');
        }else{
            $response = [];
            $response['message'] = 'Login failed! Info mismatched.';
            $response['link'] = 'login';

            return view('message', compact('response'))->render();
        }
    }

    public function userLogout(Request $request){
        Auth::logout();
        Session::flush();

        return Redirect::to('/login');
    }


    public function userRegister(Request $request){
        User::create([
            'name' => $request->full_name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return "Success Registration!";
    }
}
