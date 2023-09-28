<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class KelolaAdminController extends Controller
{
    public function index(){
        $admin = User::where('role', 'admin')->paginate(1);
        return view('mykelolaadmin', compact(['admin']));
    }
    


    public function store(Request $request){
        $data = $request->except('_token');
        $data['password'] = Hash::make($data['password']);
        

    // Handle the profile photo upload
    if ($request->hasFile('profile_photo')) {
        $profilePhotoPath = $request->file('profile_photo')->store('profile_photos', 'public');
        $data['profile_photo'] = $profilePhotoPath;
    }
   
    // Create the user record with both the profile photo path and other data
     User::create($data);
         return redirect('/kelolaadmin');
    }


    function destroy($id){
        $admin = User::find($id);
        $admin->delete();
        return redirect('/kelolaadmin');
    }

    public function update($id, Request $request){
        $data = $request->except('_token');
        $data['password'] = Hash::make($data['password']);
        $admin = User::find($id);
     // Handle the profile photo upload
     if ($request->hasFile('profile_photo')) {
         $profilePhotoPath = $request->file('profile_photo')->store('profile_photos', 'public');
         $data['profile_photo'] = $profilePhotoPath;
     }
     // dd($request);
     // Create the user record with both the profile photo path and other data
      $admin -> update($data);
         return redirect('/kelolaadmin');
     }
}
