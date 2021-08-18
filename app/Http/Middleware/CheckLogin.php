<?php

namespace App\Http\Middleware;
use Validator;
use App\Http\Controllers\LoginController;
use App\Http\Requests\LoginRequest;
use Closure;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $login = new LoginController();
        $validate = Validator::make(
            $request->all(),
            [
                'usernames' => 'required|digits_between:5,10|unique:user',
                'pass' => 'required|digits_between:5,10|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/',
            ],
            [
                'usernames.required' => 'Username là bắt buộc ',
                'usernames.digits_between' => 'Username phải từ 5 đến 10 kí tự ',
                'usernames.unique' => 'Username đẵ có trong bảng',
                'pass.regex' => 'Username không đúng định dang',
                'pass.required' => 'Password là bắt buộc ',
                'pass.digits_between' => 'Password phải từ 5 đến 10 kí tự ',

            ]
        );
        if ( $request->login == 'login') {
            $users = $login->getData();
            foreach ($users as $user) {
                if ($request->usernames == $user['username']) {
                    if ($request->pass == $user['password']) {
                        return redirect()->route('list');
                    }
                }
            }
        }else{
            $login->signUp($request);
        }
        return $next($request);
    }
}
