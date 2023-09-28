<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KelolaPeternakController extends Controller
{
    public function index()
    {
        $peternak = User::paginate(1);
        return view('mykelolapeternak', compact(['peternak']));
<<<<<<< HEAD

=======
    }
    
    public function detail($id){
        $peternak = User::find($id);
        $galeri = galeri::where('user_id', $id)->get();
        $investasi = invest::where('user_id', $id)->paginate(1);
        return view('mydetailkelolauser', compact(['peternak','galeri','investasi']));
>>>>>>> c957a01cf6079d3e144070157290286bda7ca6c0
    }

    public function detail($id)
    {
        $products = products::paginate(1);
        $peternak = User::find($id);
        return view('mydetailkelolauser', compact(['peternak', 'products']));
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');

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

    public function destroy($id)
    {
        $peternak = User::find($id);
        $peternak->delete();
        return redirect('/kelolapeternak');
    }

    public function update($id, Request $request)
    {
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
        $peternak->update($data);
        return redirect('/kelolapeternak');
    }
}
