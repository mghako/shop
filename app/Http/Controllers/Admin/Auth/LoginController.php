<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('admin.auth.login');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);
        if(auth()->attempt($credentials)) {
            session()->regenerate();
            return redirect()->route('home')->with('success', 'Login Success !');
        };
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('home')->with('success', 'Logout !');
    }
}
