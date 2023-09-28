<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Farm;
use App\Models\invest;

class InvestController extends Controller
{

    public function index()
    {
        $invests = invest::all();
        // $invests = invest::paginate(1);
        // dd($invests);
        return view('invest', compact(['invests']));
    }

    public function detail($id)
    {
        $invest = invest::find($id);
        return view('mydetailkelolainvestasi', compact(['invest']));
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');


        // dd($request);

        User::create($data);
        return redirect('/invest');
    }

    function destroy($id)
    {
        $peternak = User::find($id);
        $peternak->delete();
        return redirect('/kelolapeternak');
    }

    public function update($id, Request $request)
    {
        $data = $request->except('_token');
        $invest = Invest::find($id);

        $invest->update($data);
        return redirect('/invest');
    }
}
