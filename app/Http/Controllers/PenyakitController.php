<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Penyakit;

class PenyakitController extends Controller
{
    public function diare()
    {
        return view('pages.diare');
    }

    public function ispa()
    {
        return view('pages.ispa');
    }

    public function tbc()
    {
        return view('pages.tbc');
    }

    public function dbd()
    {
        return view('pages.dbd');
    }
}
