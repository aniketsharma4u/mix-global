<?php

namespace App\Http\Controllers;

use App\Models\Signup;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function index() {
        return view('modules.login_signup.signup');
        
    }

    public function registerUser(Request $request) {
        $regUser = [
            'name' => $request->reg_name,
            'email' => $request->reg_email,
            'password' => md5($request->password),
        ];

        $insertUser = Signup::create($regUser);

        return redirect(route('loginPage'))->with('success','Thank you for register youself');
        dd($request);

    }
}
