<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function postSignUp(Request $request)
    {
        $email = $request['email'];
        $firstName = $request['firstName'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email = $email;
        $user->firstName = $firstName;
        $user->password = $password;

        $user->save();

        return redirect()->back();
    }

    public function postSignIn(Request $request)
    {
    }
}
