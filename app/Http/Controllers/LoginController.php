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
        $this->validate($request,[
            'email' => ['required', 'email:dns'],
            'password' => 'required'
        ]);

        if(Auth::attempt(array('email' => $user['email'], 'password' => $user['password']))) {
            $request->session()->regenerate();
            if(auth()->user()->role === 'admin'){
                return redirect()->route('admin');
            } else {
                return redirect()-> route('peternak');
            }
            // return redirect()->route('auth');
        }
        
        return redirect()->route('login')->with('loginError', "BISA LOGIN NGGA LER?");
    }

    public function adminHome(){
        return view('mydashboard');
    }

    public function auth($request, $user){

        if ($user->isAdmin()) {
            return redirect('/admin');
        } elseif ($user->isPeternak()) {
            return redirect('/peternak');
        } else {
            return redirect('/login');
        }
    }
    
    public function logout(){

        Auth::logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect('/login');
    }
}