<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('autentikasi');
    }

    public function authentication(Request $request)
    {

        $user = $request->all();
        // dd($user);
        $this->validate($request, [
            'email' => ['required', 'email:dns'],
            'password' => 'required'
        ]);

        if (Auth::attempt(array('email' => $user['email'], 'password' => $user['password']))) {
            $request->session()->regenerate();
            if (auth()->user()->role === 'pembeli') {
                return redirect()->route('pembeli');
            } elseif (auth()->user()->role == 'admin') {
                return redirect()->route('admin');
            } else {
                return redirect('/peternak');
            }
        }
        return redirect()->route('login')->with('loginError', "Login gagal, Username/password salah!");
    }


    public function logout()
    {

        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
