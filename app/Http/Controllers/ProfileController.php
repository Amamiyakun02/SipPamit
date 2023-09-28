<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $id = auth()->user()->id;
        $user = User::find($id);

        return view('myprofile', compact('user'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required',
            'email'  => 'email:dns',
            'profile_photo'   =>'image|file|max:2048',
            'deskripsi' => '',
            'password_baru' => ''
        ]);

        if($request->file('profile_photo')){
           $validatedData['profile_photo'] = $request->file('profile_photo')->store('public/gambar-user');
        }
        
        $user = User::find($request->id);
        $user->update($validatedData);

        return redirect('/profile');
    }   
}

