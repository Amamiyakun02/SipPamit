<?php

namespace App\Http\Controllers;

use App\Models\invest;
use Illuminate\Http\Request;

class KelolaInvestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invests = invest::all();
        // dd($invests);
        return view('mykelolainvestasi', compact('invests'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\invest  $invest
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invests = invest::find($id);
        dd($invests);
        return view('mydetailkelolainvestasi', compact(['invests']));
    }
}
