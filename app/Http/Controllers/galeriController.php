<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\galeri;
use Illuminate\Http\Request;

class galeriController extends Controller
{
    public function store(Request $request){
        $data = $request->except('_token');
        

    // Handle the profile photo upload
    if ($request->hasFile('gambar')) {
        $profilePhotoPath = $request->file('gambar')->store('profile_photos', 'public');
        $data['gambar'] = $profilePhotoPath;
    }
    galeri::create($data);
         return redirect('/detailpeternak/' . $data['user_id']);
}

function destroy($id, $user_id){
    $galeri = galeri::find($id);
    $peternak = User::find($user_id);
    $galeri->delete();
    return redirect('/detailpeternak/' . $peternak['id']);
}
}