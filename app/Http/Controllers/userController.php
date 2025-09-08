<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class userController extends Controller
{

    public function login_form(){
        return view('auth.login');
    }

    public function register_form(){
        return view('auth.register');
    }

    public function login(Request $required){
        $valid = $required->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($valid)){
            $required->session()->restart();

            $user = auth()->user();

            switch ($user->role) {
                case 'admin':
                    return redirect('/admin/dashboard');
                case 'staff':
                    return redirect('/staff/dashboard');
                default:
                    return redirect('/dashboard');
            }
        }

        return back();



    }
    public function registration(Request $register){
        $valid = $register->validate([
            'email'=> 'required|email|unique:users,email',
            'password'=> 'required|string|confirmed',
            'phone' => 'required|numeric|min:10',
            'name'=> 'required|string',
            'role'=> 'required|in:admin,customer,staff',
        ]);
        User::create([
            'name' => $valid['name'],
            'email' => $valid['email'],
            'password' => Hash::make($valid['password']),
            'phone' => $valid['phone'],
            'role' => $valid['role'],
        ]);

        return redirect('/');
    }
}
