<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Model\LoginModel;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function getData()
    {
        $users = LoginModel::all();
        return $users;
    }


    public function checkLoginOrSignUp(Request $request)
    {
        $login = $request->input('login');
        $singUp = $request->input('signup');

        if (isset($login)) {
            $login = $this->login($request);
            return $login;
        } else {
            $this->signUp($request);
        }
    }

    public function login($request)
    {
        $users = $this->getData();
        foreach ($users as $user) {
            if ($request->usernames == $user->username) {
                if ($request->password == $user->password) {
                    return redirect()->route('list');
                }
            }
        }

        return view('login');
    }

    public function signUp($request)
    {

        $tasks = new LoginModel();
        $tasks->username = "$requests->username";
        $tasks->password = "$requests->password";
        $tasks->save();
        $messages = 'bạn phải đăng nhập lại';
        return view('login', compact('messages'));
    }
}
