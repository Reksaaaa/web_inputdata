<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register() {
        return view('register');
    }

    public function registerPost (Request $request) {
        $user = new User(); 

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back ()->with('success', 'Register Successfully');
    }

    public function login () {
        return view ('login');
    }

    public function loginPost (Request $request) {
        $credetials = [
        'email' => $request->email,
        'password' => $request->password,
        ];
        
        if(Auth::attempt($credetials)) {
            return redirect('dashboard')->with('success', 'Login Berhasil');
        }

        return back()->with('error', 'Email atau Password Salah');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
