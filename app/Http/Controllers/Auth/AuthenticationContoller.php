<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthenticationContoller extends Controller
{

    public function login_form(){
        return view('auth.login');
    }


    public function register_form(){
        return view('auth.register');
    }

    public function login(Request $request){
        $valid = $request->validate([
            'email'=>'required|email|exists:users,email',
            'password'=> 'required|string'
        ]);

        if(Auth::attempt($valid)){
            $request->session()->regenerate();
            $role=auth()->user()->role;
            if($role=='admin'){
                return redirect()->intended("/admin/dashboard");
            }
            if($role=='staff'){
                return redirect()->intended("/staff/staff");
            }
            if($role=="customer"){
                return redirect()->intended('/customer/dashboard');
            }
        }
    }

    public function registration(Request $register){
        $valid = $register->validate([
            'email'=> 'required|email|unique:users,email',
            'password'=> 'required|string|confirmed',
            'phone'=> 'required|numeric|min:10',
            'name'=> 'required|string',
            'role'=> 'required|in:admin,customer,staff',
        ]);
        User::create([
            'name'=>$valid['name'],
            'email'=>$valid['email'],
            'password'=>Hash::make($valid['password']),
            'phone'=>$valid['phone'],
            'role'=>$valid['role'],

        ]);

        return redirect("/");
    }
}
