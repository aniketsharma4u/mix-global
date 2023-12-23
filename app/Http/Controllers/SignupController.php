<?php

namespace App\Http\Controllers;

use App\Models\Signup;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function index()
    {
        return view('modules.login_signup.signup');
    }

    public function registerUser(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:signups|email',
            'password' => 'required',
        ]);

        $regUser = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => md5($request->password),
        ];

        $insertUser = Signup::create($regUser);

        return redirect(route('loginPage'))->with('success', 'Register successfully');
    }

    public function userLogin(Request $request)
    {
        $validated = $request->validate([
            'email_id' => 'required|email',
            'user_password' => 'required',
        ]);

        $loginPayload = [
            'email' => $request->email_id,
            'password' => md5($request->user_password),
        ];

        $getUserData = Signup::where($loginPayload)->get()->first();

        if ($getUserData != 'null' && $getUserData != '') {
            return redirect(route('productList'));
        } else {
            return redirect(route('loginPage'))->with('error', 'Invaid email and password');
        }
    }
}
