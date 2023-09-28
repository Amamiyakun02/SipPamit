<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\products;

class PembeliController extends Controller
{
    public function index()
    {
        $Produk = products::take(4)->get();
        $farmerUser = User::where('role', 'peternak')->get();  
        
        return view('shoppinghome', compact(['farmerUser','Produk']));
    }
}
