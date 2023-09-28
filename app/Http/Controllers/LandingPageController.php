<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\products;


class LandingPageController extends Controller
{
    public function index()
    {
        $Produk = products::take(4)->get();
        $farmerUser = User::where('role', 'peternak')->get();
        // dd($farmerUser);

        return view('shoppinghome', compact(['farmerUser', 'Produk']));
    }
}
