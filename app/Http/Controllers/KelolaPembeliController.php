<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KelolaPembeliController extends Controller
{
    public function index(){
        $pembeli =  User::where('role', 'pembeli')->paginate(1);
        return view('mykelolapembeli', compact(['pembeli']));
    }
    
    public function detail($id){
        $pembeli = User::find($id);
        return view('mydetailkelolauser', compact(['pembeli']));
    }

    public function store(Request $request){
       $data = $request->except('_token');
       $data['password'] = Hash::make($data['password']);
    // Handle the profile photo upload
    if ($request->hasFile('profile_photo')) {
        $profilePhotoPath = $request->file('profile_photo')->store('profile_photos', 'public');
        $data['profile_photo'] = $profilePhotoPath;
    }
    // dd($request);
    // Create the user record with both the profile photo path and other data
     User::create($data);
        return redirect('/kelolapembeli');
    }

    function destroy($id){
        $pembeli = User::find($id);
        $pembeli->delete();
        return redirect('/kelolapembeli');
    }

    public function update($id, Request $request){
        $data = $request->except('_token');
        $data['password'] = Hash::make($data['password']);
        $pembeli = User::find($id);
     // Handle the profile photo upload
     if ($request->hasFile('profile_photo')) {
         $profilePhotoPath = $request->file('profile_photo')->store('profile_photos', 'public');
         $data['profile_photo'] = $profilePhotoPath;
     }
     // dd($request);
     // Create the user record with both the profile photo path and other data
      $pembeli -> update($data);
         return redirect('/kelolapembeli');
     }
}
