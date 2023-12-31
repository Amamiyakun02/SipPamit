<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\galeri;
use App\Models\invest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KelolaPeternakController extends Controller
{
    public function index(){
        $peternak =  User::where('role', 'peternak')->paginate(1);
        return view('mykelolapeternak', compact(['peternak']));
    }
    
    public function detail($id){
        $peternak = User::find($id);
        $galeri = galeri::where('user_id', $id)->get();
        $investasi = invest::where('user_id', $id)->paginate(1);
        return view('mydetailkelolauser', compact(['peternak','galeri','investasi']));
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
        return redirect('/kelolapeternak');
    }

    function destroy($id){
        $peternak = User::find($id);
        $peternak->delete();
        return redirect('/kelolapeternak');
    }

    public function update($id, Request $request){
        $data = $request->except('_token');
        $data['password'] = Hash::make($data['password']);
        $peternak = User::find($id);
     // Handle the profile photo upload
     if ($request->hasFile('profile_photo')) {
         $profilePhotoPath = $request->file('profile_photo')->store('profile_photos', 'public');
         $data['profile_photo'] = $profilePhotoPath;
     }
     // dd($request);
     // Create the user record with both the profile photo path and other data
      $peternak -> update($data);
         return redirect('/kelolapeternak');
     }
}
