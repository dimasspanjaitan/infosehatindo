<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Penyakit;

class HomeController extends Controller
{
    public function index()
    {
        $penyakits = Penyakit::all();
        // dd($penyakits);

        return view('welcome', compact('penyakits'));
    }

    public function info(Request $request)
    {
        if(empty($request->slug)){
            return redirect()->back();
        }
    }
}
